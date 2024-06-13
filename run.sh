#!/bin/bash

set -euo pipefail

build_image() {
  docker build "--tag=$TAG" \
  "$DIR" \
  --file "$DIR/Dockerfile-php-$phpversion" \
  --build-arg GITHUB_TOKEN="$GITHUB_TOKEN"
}

read_env_var() {
    VAR=$(grep $1 $2 | xargs)
    IFS="=" read -ra VAR <<< "$VAR"
    echo ${VAR[1]}
}

usage() {
    echo "Usage: $0 [-v7|-v8] [-b] <cmd>"
    echo "  -v    Set the major PHP version to use (7 or 8)"
    echo "  -b    Build the Docker image"
    exit 1
}

if [ $# -eq 0 ]
then
  usage
fi

while getopts v:b flag
do
    case "${flag}" in
        v) printf "Executing command with php version: %s\n" "$OPTARG" >&2
           phpversion=${OPTARG};;
        b) build=true;;
        *) usage ;;
    esac
done

shift $((OPTIND -1))

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
GITHUB_TOKEN=$(read_env_var GITHUB_TOKEN .env)

TAG_NAME="demvsystems/werte"
TAG_VERSION="$(cat "$DIR/Dockerfile-php-$phpversion" | shasum -t | cut -d ' ' -f 1)"
TAG="$TAG_NAME:$TAG_VERSION"

if [ "${build:-false}" = true ] || [ "$(docker images -q "$TAG" 2> /dev/null)" == "" ]; then
  build_image
fi

docker run --rm -it \
  -v "$DIR:/var/www/html" \
  "$TAG" \
  "$@"
