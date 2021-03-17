#!/bin/bash

set -euo pipefail

while getopts v: flag
do
    case "${flag}" in
        v)
          echo "Executing command with php verison: $OPTARG" >&2
          phpversion=${OPTARG};;
    esac
done

if [ "$1" = "-v7" ] || [ "$1" = "-v8" ]; then
  shift
fi

# Find current folder
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

read_env_var() {
    VAR=$(grep $1 $2 | xargs)
    IFS="=" read -ra VAR <<< "$VAR"
    echo ${VAR[1]}
}

GITHUB_TOKEN=$(read_env_var GITHUB_TOKEN .env)

# Use a checksum of the dockerfile + dependencies as the image version
TAG_NAME="demvsystems/werte"
TAG_VERSION="$(cat "$DIR/Dockerfile-php-$phpversion" | shasum -t | cut -d ' ' -f 1)"
TAG="$TAG_NAME:$TAG_VERSION"

# Build a new image if we pass --build or the image is outdated
if [ "$1" = "--build" ] || [ "$(docker images -q "$TAG" 2> /dev/null)" == "" ]; then
  docker build "--tag=$TAG" \
  "$DIR" \
  --file "$DIR/Dockerfile-php-$phpversion" \
  --build-arg GITHUB_TOKEN="$GITHUB_TOKEN"

  # Remove --build if present
  if [ "$1" = "--build" ]; then
    shift
  fi
fi

# Pass arguments to new temporary container
docker run --rm -it \
  -v "$DIR:/var/www/html" \
  "$TAG" \
  "$@"
