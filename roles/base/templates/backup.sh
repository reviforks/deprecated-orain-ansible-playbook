export AWS_ACCESS_KEY_ID="{{AWS_BACKUPS_ACCESS_KEY_ID}}"
export AWS_SECRET_ACCESS_KEY="{{AWS_BACKUPS_SECRET_ACCESS_KEY}}"
export PASSPHRASE=""
duplicity --full-if-older-than 30D --encrypt-key={{duplicity_key_id}} --exclude=/tmp --exclude=/var/tmp --exclude=/proc --gpg-options="-z6" / {{duplicity_path}}
export AWS_ACCESS_KEY_ID=""
export AWS_SECRET_ACCESS_KEY=""

