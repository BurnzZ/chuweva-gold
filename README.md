=======
## CHUWEVA-GOLD (Team 2)
#### v1.6 - Feb 18, 2014


  Changelogs:

    v1.7 - Feb 18, 2014
      + fixes for incorrect timestamp from view-AJAX to controller
        - added date_default_timezone_set("Asia/Manila")
      + `reserves` and `favorites`
        - optimized
        - improved AJAX response and handling
        - removed comments to rely on readable code
        - implementing $_SESSION within the controller for username retrieval
        - added initial public encapsulation to methods within both model and controller

    v1.6.a - Feb 17, 2014
      + added favorites->check() for checking existing reservations

    v1.5 - Feb 16, 2014
      + updated SQL regarding for new implementations in
          `reserves`, `favorites`, and `notifs`
      + fixed reserve->dequeue() not deleting the dequeued data
      + assignment for Ulysis and Yssa for 'claim_notifs' sub module
        - added verbose instructions
        - added pre-made AJAX calls

    v1.4 - Feb 9, 2014
      + `reserves` model->dequeue() fixed query() string mistake
      + `reserves` controller->enqueue() completed
      + `reserves` added controller->check() - to see if
                    user has reserved a certain book
      + `notifs` initial coding in MVC (super scratch)

    v1.3 - Feb 3, 2014
      + `favorites` typo corrections in both syntax and comments
      + `reserves` initial coding in controller and model
         - lacks controller->enqueue() and its model counterpart 
         - did not test yet, assumption: working

    v1.2 - Feb 2, 2014
      + `favorites` finalization
      + `favorites` AJAX ready
      + `favorites` included examples
	
    v1.1 - Feb 1, 2014
      + `favorites` improvements
      + `favorites` controller methods in AJAX-ready form
  
    v1.0 - Jan 28, 2014
      + 1st coding session
      + completion of `favorites`
      
      
  Modules Assigned:
  
  - Favorites
  - Reserve
  - Notifications 
    
=======
  ```
  + Favorites
  + Reservations
  + Notifications 
  ```
    
---

  Team Lead:
  ```
  + BERNAL, Kevin Lloyd H.
  ```
   
  Developers:
  ```
  + ADVINCULA, Kim Joshua C.
  + De RAMOS, Marc Ulysis
  + VILLANUEVA, YSSA MARIE
  ```
  
