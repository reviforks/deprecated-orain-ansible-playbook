ansible-playbook
================

Our Ansible playbook with tasks, configuration files, etc. for the Orain wikifarm

About Ansible playbooks: http://www.ansibleworks.com/docs/playbooks.html

Travis CI [![Build Status](https://travis-ci.org/Orain/ansible-playbook.png?branch=master)](https://travis-ci.org/Orain/ansible-playbook)
---------------------

Travis CI is a continuous integration service used by this repo (see [.travis.yml](https://github.com/Orain/ansible-playbook/blob/master/.travis.yml) for details).

On every new pull request or commit, Travis CI will run a series of checks on the repo.

See https://travis-ci.org/Orain/ansible-playbook

Changing Ansible stuff
----------------

Do not make lots of changes in quick succession. 
Deploy a new change, 
wait for it to take effect, 
make sure nothing is broken 
and then move on to your next change.

If something does go wrong, then revert the change that broke it!
If you don't know why it broke, please fill out an issue linking to the commit!

If ansible does not seem to be updating on the server, then you have likely broken the syntax withing the playbook.
Travis CI validates the playbook on every commit and pull request and will likely shout in IRC with details of the breakage.

Please revert any breaking changes to Ansible and submit a new fixed commit later.

Changing MediaWiki stuff
----------------

Before making any changes to MediaWiki stuff, make sure the user requesting the change has the 'authority' to request for changes on the given wiki.

### Deploying new MediaWiki LocalSettings.php

After any change in LocalSettings.php, please make sure the syntax is correct!
If LocalSettings syntax is incorrect, the ansible-pull will fail.

To check the syntax simply run the following command:
 > php -l roles/mediawiki/files/LocalSettings.php.j2

If you cannot run this on your machine, then submit you change as a branch of the repo and make a pull request! This way, Travis CI will run the validation test for you.

### Deploying new MediaWiki extensions

Before attempting to include any new extensions, they must first be contained within [our fork of the MediaWiki repo](https://github.com/Orain/mediawiki-core).
Once included in that repo, they will be available to the farm.

Only deploy security-checked extensions. If you have any doubts, open an issue on GitHub!

 1. Make sure the extension and all dependencies are included in our MediaWiki branch.
 2. Deploy the extension to the extloadwiki and make sure it appears in Special:Version and nothing is broken.
 4. Deploy to the wiki you actually want, leaving the extension loaded on extloadwiki.

Note: Although  the Localisation cache update used to be run as a cronjob it is now run after pulling changes. When
deploying a new extension to a wiki there might be a period of 60 seconds which you see Exceptions which is due to
the Localisation cache update being mid run!
