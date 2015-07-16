## Fab Lab User Extensions Module

The Fab Lab User Extensions Module is a module for the ProcessWire CMS. The
code was initially written by Thomas R Storey in the summer of 2015.

This module extends the user-centric functionality of the Fab Lab website for
to meet the needs of the Lab's services and activities at the University of
Florida. Primary features include:
* Adds a UFID field to the user template
* Frontend Login page
* User registration page
* "Forgot Password" page
* Account management page, where users can change their password, activate
"oriented user" privileges, resend email verification emails, and view the
status of their uploaded 3D prints, equipment reservations, and charges
made to their account for materials and services.
* Handles automated account-related communication for registering, confirming,
and authorizing oriented users.

### Installation

1. Clone this repository, or download as a zip file.
*  Copy the `LabUser.module` and `LabUserFormBuilder.module` files to your
ProcessWire `sites/modules/` directory.
*  Log in to the ProcessWire backend as a user with superuser privileges. (By
  default, at `http://yoursiteurl.com/processwire`)
*  Navigate to the Modules page of the admin interface.
*  Refresh the modules list by clicking the "Refresh" button at the top right
of the page.
*  Click the install button on the row corresponding to the LabUser module.

### Post Installation Steps

This module provides a lot of useful pre-configuration, but there are a couple
of important details left up to the site administrator.

First, the user frontend pages are generated as direct children of the root
page. Usually, this will make them show up as menu entries in the top-bar
navigation (depending on the templating scheme of your site). If you would like
to prevent this behavior, simply mark each of the pages as "Hidden". This can
be found in the Edit page for each page (accessible through the tree view),
under the "Settings" tab.

If you want to move any of the provided front-end forms to a different page,
you have to do two things:
1. Create the new page where you would like the login form to appear. You can use any template for this page as long as it has a body field, and that body text ends up on the page at some point.
*  Include the "injection tag" for the form you want somewhere in the body text
of the page. Wherever you put the injection tag, there the form shall appear.
If you just want the form on the page, just put the injection tag in the body
text with nothing else. The injection tags correspond to the forms as follows:
  * [login] = log-in form
  * [register] = registration form
  * [account] = account management form
  * [reset] = forgot password form
*  Finally, change the appropriate Page ID on the Module Settings page for the
LabUser module. If you want to move the login page, for instance, you need to
change the id number in the Login Page ID field to the id number of the page
you want to move the form to. How do you know the id number? If you go to edit
a page in processwire, the url in your address bar should look something like
`http://fablab.arts.ufl.edu/processwire/page/edit/?id=1950`. The number after
the "id=" is the id of the page you are editing.

You should also configure your email settings for the LabUser module.
* There is a contact email address and name that should be kept up to date to
point to whoever is in charge of managing site and lab users.
* The automated registration emails can also be configured with a subject line
and body text. __Note: The body text for registration emails MUST include the
[url] injection tag!__ If this tag is not present, users will be unable to
verify their email address when they register. Any html in the body text will
be rendered in the email, so preferably the [url] tag should be inside the href
attribute of an anchor html tag. Example:
  * `<a href='[url]'>Text that will appear as a link in the email.</a>`
* To configure the automated success emails sent to users when they verify their email address or register as oriented users, simply change the confirmation email subject line and body text fields.
* You can also configure the subject line and body text for the automated
password reset emails. __Note: The body text for the reset email MUST include
the [pass] injection tag!__ Otherwise, users won't know what their password is
after resetting, which of course defeats the whole purpose.

One more very important configuration setting is the orientation code.

### Orientation code intended usage

After each lab orientation, give each participant a slip of paper with a code
printed on it. The participant should be instructed to enter this code in the
"Orientation Code" field of their account page. Doing so will mark them as
full, oriented users in the system, giving them access to the upload and
schedule pages. The code they enter must match the code that you set in the
orientation code field of the LabUser module settings! I also recommend
changing the code after each session, and changing it to a default "locked"
code that is never given to users when you are not providing new orientations
(to prevent people from registering themselves as oriented when in fact they
have not attended an orientation).
