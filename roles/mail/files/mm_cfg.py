from Defaults import *

MAILMAN_SITE_LIST = 'mailman'
DEFAULT_URL_PATTERN = 'http://%s/'
IMAGE_LOGOS = '/images/mailman/'

DEFAULT_EMAIL_HOST = 'lists.orain.org'

DEFAULT_URL_HOST = 'lists.orain.org'
add_virtualhost(DEFAULT_URL_HOST, DEFAULT_EMAIL_HOST)

DEFAULT_SERVER_LANGUAGE = 'en'

USE_ENVELOPE_SENDER = 0
DEFAULT_SEND_REMINDERS = 0

MTA='Postfix'
