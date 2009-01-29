Password Field Extension
------------------------------------

Version: 1.0
Author: Stephen Bau (stephen@domain7.com)
Build Date: 31 December 2008
Requirements: Symphony 2.0


[INSTALLATION]

1. Upload the 'passwordfield' folder in this archive to your Symphony 'extensions' folder.

2. Enable it by selecting the "Field: Password" Extension, choose Enable from the with-selected menu, then click Apply.

3. You can now add the "Password Input" field to your sections.


[USAGE]

- Use the Password Input field as a replacement for a regular text input field to save passwords as plain text in the database, yet still be able to obscure passwords in the administration interface.

- The password field is an input element with the type attribute set to "password" to obscure input.

- The list view of entries also obscures passwords by replacing the password with an appropriate number of asterisk (*) characters (no more than 12 asterisks) while also indicating the length of the password in parentheses.

- The ability to sort entries in the list view by the value of the password field is disabled