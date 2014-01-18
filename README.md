ansible-playbook
================

Our Ansible playbook with tasks, configuration files, etc. for the Orain wikifarm

About Ansible playbooks: http://www.ansibleworks.com/docs/playbooks.html

TravisCI [![Build Status](https://travis-ci.org/Orain/ansible-playbook.png?branch=master)](https://travis-ci.org/Orain/ansible-playbook)
---------------------

TravisCI is a Change Integration service used by this repo (see [.travis.yml](https://github.com/Orain/ansible-playbook/blob/master/.travis.yml) for details).

On every branch, pullrequest and new commit TravisCI will run a series of checks on the repo.

See https://travis-ci.org/Orain/ansible-playbook

Changing Ansible Stuff
----------------

Do not make lots of changes in quick succession. 
Deploy a new change, 
wait for it to take effect, 
make sure nothing is broken 
and then move on to your next change.

If something does go wrong then revert the change that broke it!
If you dont know why it broke please fill out an issue linking to the commit!

If ansible does not seem to be updating on the server than you have likely broken the syntax withing the playbook.
TravisCI validates the playbook on every commit, branch and pullrequest and will likely shount in IRC once with details of the breakage.

Please revert any breaking changes to Ansible and siubmit a new fixed commit later.

Changing Mediawiki Stuff
----------------

Before making any changes to mediawiki stuff make sure the user requesting the change has the 'authority' to request for changes on the given wiki.

### Deploying new Mediawiki LocalSettings.php

After any change in LocalSettings.php please make sure the syntax is correct!
If LocalSettings syntax is incorrect you will break the whole wikifarm!

To check the syntax simply run the following command:
 > php -l roles/mediawiki/files/LocalSettings.php.j2

If you can not run this on your machine then submit you change as a branch of the repo and make a pull request! This way TravisCI will run the validation test for you.

### Deploying new Mediawiki Extensions

Before attempting to include any new Extensions they must first be contained within [our branch of the mediawiki repo](https://github.com/Orain/mediawiki-core).
Once included in this repo they will be availible to the farm.

Only deploy security checked extensions, if you have any doubts open an issue on github!

 1. Make sure the extension and all dependancies are included in our mediawiki branch
 2. Deploy the extension to the extloadwiki and make sure it appears in Special:Version and nothing is broken.
 3. Once deployed here a cronjob that is run every few minuites will update the Localisation Cache if needed (Without this you rick breaking wikis)
 4. Deploy to the wiki you actually want, leaving the extension loaded on extloadwiki
