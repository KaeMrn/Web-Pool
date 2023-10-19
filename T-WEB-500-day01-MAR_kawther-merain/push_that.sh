#!/bin/bash

if [ $# -eq 0 ]; then
  echo "Usage: $0 <commit_message>"
  exit 1
fi

git add .

git commit -m "$1"

git push

if [ $? -eq 0 ]; then
  echo "Push successful."
else
  echo "Push failed."
fi
