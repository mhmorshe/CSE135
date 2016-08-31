The username and password to open the app are as follows

Username: username
Password: password

1. Sorting

   Clicking on the headings 'Title', 'Studio', 'Year', and 'Box Office' will
   sort the rows in the list view.  This is done by sending information about
   the sorting through a get request to the page that displays the data

2. Pagination

   Each page shows 3 movies.  Clicking "previous page" or "next page" will
   change the page and will cause the list view to display either the next 3
   of previous 3 movies.  This is done by passing a page number to the page
   that displays the list as a get value.  The page number is also validated
   do that it can not be set bellow 1 and can not be above the max page number.
   However the validation is not needed in most cases because the button for
   "next page" is not on the last page and "previous page" is not on the first
   page.  The validation is just for the case that users change the get into
   via the url.

3. Add Record

   A record can be done by clicking Add.  This will bring up a form that promts
   the user to enter required information to add a record.  When this form is
   submitted, the new record will be added and displayed if valid data was
   entered into the form.

4. Update Record
 
   A record can be updated by clicking the button with the picture of the pen
   next to the record on the list view.  This will bring up the same form used
   to add records, but the values of the inputs will already be set to the
   current values of the record.  The form data can then be changed and the
   record will contain the new data when the form is submitted, if valid data
   was entered.

5. Delete Record
   
   This can be done by clicking the button with the picture of the trash can 
   next to the record on the list view.

6. Data validation

   This is done when records are added, or updated.  After the form
   is submitted in either case, the data entered into the form is checked
   to ensure that it is in the correct format.  If it is not, another form
   will come up that tells the user that the form data was entered incorrectly,
   tells them which fields of the form contain data that is not in the
   correct format, and prompts them to re-enter the data.  The data entered
   in this second form is also checked and will continue to come up after
   it is submitted until valid data is entered.  The valid data will then be
   used to update or add a record.



   
   all the code used to run the app can be found at:
   http://github.com/mhmorshe/CSE135/tree/master/passwordProtected/crud

