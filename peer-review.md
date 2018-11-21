## P3 Peer Review

+ Reviewer's name: Stacy Schermann
+ Reviwee's name: Sishir Y.
+ URL to Reviewe's P3 Github Repo URL: https://github.com/q0w9e8r7t6y5/p3

## 1. Interface

+ The site interface was simple and easy to use.  
+ On the "Customer Information" form, I wish there was an indicator of which fields were required.
  Since there was no indication of required fields, I pressed the "Submit" button to continue.  Then, I was alerted that the fields were required.
  On the second page, it was odd that all the options were selected for me.  So, even though that's not what I wanted to order, it submitted.
  Maybe having no radio buttons selected would prevent this from happening.
  Additionally, on both pages, the type was very close to the left margin.  If some padding was adding in the CSS, maybe this would help to clearly see all the text.
+ I thought the details of the order on the bottom of the page were an excellent way to show what exactly was chosen.  Highlighting the submitted order in blue also helped to alert the customer of what was submitted.
+ Please add an * or a note to any of the required fields.  This will make it easier to know what needs to be completed before hitting the submit button.


## 2. Functional testing

+ Since none of the form fields were listed as required, I just tried to click the submit button.  Then, I received the error messages.
+ I entered a phone number including the dashes, and the error message stated that the phone must have 10 digits.  My number did have 10 digits, it just had dashes included.  Additionally, maybe having a phone number already populated in the format that is correct would be helpful.
+ Maybe adding the word "valid" to "e-mail" will help with the correct format.
+ There wasn't a way to update my order once it was submitted.  I think when I went to change my order, a new order was placed.
+ I know it's a simple app, but there wasn't a way to order two burritos, or add both types of beans.
+ After clicking the "Place Order" button, the page returned to the top, but the order information was at the bottom.  This lead me to believe that there was an error since I didn't receive a confirmation message.  As I'm scrolling through the order options, I finally see that my order was submitted at the bottom of the page.
    Maybe a separate page for order confirmation would work well.
+ When accessing p3.sy-dwa15.me/books, there was a customized error page with a "Homepage" button.


## 3. Code: Routes
+ No.  

## 4. Code: Views

+ Template inheritance is used.
+ On the order.blade.php file, there is a lot of PHP code, which could be used in a function on a controller.
+ The only word that I was not initially familiar with was "ucwords".  After a little research, it made sense now.

## 5. Code: General
Address as many of the following points as applicable:

+ No.
+ No.
+ No.
+ No.
+ No.

## 6. Misc
No.
