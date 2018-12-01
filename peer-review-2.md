## P3 Peer Review

+ Reviewer's name: Stacy Schermann
+ Reviwee's name: Venkatesh M.
+ URL to Reviewe's P3 Github Repo URL: https://github.com/venkateshmantha/dwa-p3

*Answer the following questions in regards to the student's project you are reviewing. REMOVE THE INSTRUCTIONS FOR EACH PROMPT when complete. We should only see YOUR ANSWERS.*

## 1. Interface
Address as many of the following points as applicable:

+ The interface is clean and simple.  The fields are placed in a manner that does not require any instructions.  The required fields
    are noted (before clicking either button).  Both buttons function as expected.
+ No parts of the interface were confusing or didn't work as expected.
+ No.  Everything looked as expected.
+ Instead of the drop-down menus, I would use radio buttons.  That way, the user would be able to see options on both sides
    at the same time so they knew which conversions were available. 


## 2. Functional testing
One challenge of developing software is thinking of all the unexpected ways users might interact with our applications. It's easy to develop &ldquo;blinders&rdquo; to methods of interaction because we know so much about *how* our application works, and so we have a hard time imagining how our interfaces might be misinterpreted. Thus, it can be useful to have an outsider rigorously test our applications with the explicit intention of trying to break it.

Knowing this, it's time to put your reviewee's application to the test. Think of all the unexpected ways their application could be used with the intention of trying to produce some unexpected/undesirable outcome.

Examples...
+ Clicking the "Convert" button without having a value to convert did produce an error message (as expected)
+ Since the drop-down menus were pre-populated, and weren't listed as required, I entered "1" as a value.  The result was 1 Meter = 1 Meter. 
+ Entering a letter (rather than a number) did show an error message.  Rather than having "value" to convert, maybe "number" or "digit" may be clearer.
+ When trying to access p3.venkateshmantha.me/all a generic error message was displayed.
+ When I clicked the "RoundUp" checkbox, the number wasn't actually rounded up.  For instance, when converting Kilometers to miles, I entered "10".
    Without rounding up, the answer was 6.21371.  When I selected "RoundUp", the answer was 6.  This is technically rounding down (or rounding to the nearest number).
    When I entered "11" as the value and not rounding up, the answer was 6.835081.  When I selected "RoundUp", the answer was still 6.  I had anticipated the answer being 7.
    I'm not sure if that was the intended answers or if rephrasing the "RoundUp" option would be clearer. 


## 3. Code: Routes

All the code was correctly written for the route.


## 4. Code: Views
Skim through the View files in `/resources/views` and address as many of the following points as applicable:

+ Yes, template inheritance was used.
+ There are no separation of concern issues.
+ There was no PHP that could be done in Blade.
+ I was familiar with all the Blade syntax.

## 5. Code: General
Address as many of the following points as applicable:

+ I did not notice any inconsistencies in the code style.
+ All applicable best practices were addressed in the code.
+ Comments for the functions in the controller would be nice so another coder would not need to figure out what the code is.  
    They could read a quick comment, and if it's not the part of the code they need, they can continue to the next function.
    This would be helpful in the functions that are more than 10 lines of code.
+ In the form, the values and attributes were listed on separate lines.  I usually place those on one line.  
    It was easier to find and compare those to other input tags when separated.
+ I understood all parts of the code.

## 6. Misc
No additional comments.
