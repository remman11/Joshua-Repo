
# Capstone-Tugboat-Laravel-dev

### Development `Phase 1` Update `8`

`new`

`additions`
* `js/berth/berth.js` berth maintenance scripts
* `js/employee/employee.js`employee maintenance scripts
* `js/pier/pier.js` pier maintenance scripts
* `js/position/position.js`position maintenance scripts
* `js/user/user/user.js` user maintenance scripts

#### these are for the additional maintenance usertype

- [x] `new` UsertypeController
- [x] `new` User.php

* `newTemplates` for real This Time and Final 
- [x] `new` newInlineScripts.blade.php
- [x] `new` newNavbar.blade.php
- [x] `new` newSidebar.blade.php
- [x] `new` newTemplate.blade.php
- [x] `new` newTemplateScripts.blade.php
- [x] `new` newTemplateStyle.blade.php

##### this views are the master template for the whole application, if the views gets fucked somewhere here is maybe the problem.

`deletions`
* this base template had too many bugs `masterTemplate.blade.php` it's time for you to go, you've served your purpose. `bye`

`updates`
- [x] The Maintenance is Finally Finished And Ready to be Tested.
* contracts has been moved to the utilites

### Development `Phase 1` update `7`

### July 21, 2018

`additions`
##### files
- [x] dist/css/skins/maroon.css

##### folders
dist/modules/waves
- [x] waves.css
- [x] waves.js

`fixes`
##### position.html
    - [x] add and edit views are now in modal
##### toaster added to :
    - [x] team-builder.html
    - [x] contract.html

`deletions`

### Development `Phase 1` update `6`

`additions`
##### files
- [x] contract.js
- [x] contract.html
- [x] noCard.js
- [x] withCard.js

##### folders
- [x] `new` dist/modules/sweetalerts
        - [x] sweetalert.css
        - [x] sweetalert.min.js
    - `new` dist/modules/smartwizard
        - `new` dist/modules/smartwizard/css
            - [x] smart_wizard_theme_arrows.min.css
            - [x] smart_wizard.min.css
        - `new` dist/modules/smartwizard/js
            - [x] jquery.smartWizard.min.css
`fixes`
- tugboat.html & position.html
    - [x] fixed the file destination of sweetalerts 
    - [x] fixed the assets
    - [x] linked the new js files

`deletions`
- from dist/js
    - [x] sweetalert.min.js
    - [x] add.js
    - [x] custom.js
    - [x] edit.js
- from dist/css
    - [x] sweetalert.css

### Development `Phase 1` update `5`

### July 2018

`new`

* maintenance is almost complete!
T
`Go For IT!!`
* the following `controllers` are back! for maintenance tables

- [x] `restored` BerthController
- [x] `restored` ContractsController
- [x] `restored` EmployeesController
- [x] `restored` EquipmentsController
- [x] `restored` PierController
- [x] `restored` PositionController
- [x] `restored` TugboatController

`welcome!!`

* the following `models` has added for maintenance tables with proper `migrations`

- [x] `restored` Berth
- [x] `restored` Employees
- [x] `restored` Equipments
- [x] `restored` Pier
- [x] `new` Position
- [x] `new` Tugboat
- [x] `new` TugboatClass
- [x] `new` TugboatMainSpecifications
- [x] `new` TugboatSpecifications

`updated`

* fixed foreign key relationship for

- [x] Tugboat->TugboatClass 
- [x] Tugboat->TugboatMainSpecifications
- [x] Tugboat->TugboatSpecifications
- [x] Employees->Position

`hurray!`

### Development `Phase 1` update `4`
### July 6, 2018

the app has been refurbished

`new`
* the new base template is `masterTemplate.blade.php`
* added foreign key constraint for `Pier` and `Berth`
* sidebar Maintenance Navigation is now working


`bug fixes` 
- [x] fixed a bug where the search form icon tends to become smaller

`updates`
* identified a bug where the color of theme doesn't change when the color change button is clicked. 

`deletions`
###### Deleted Controllers

- [x] BerthController
- [x] ContractsController
- [x] EmployeeControgitller
- [x] EquipmentsController
- [x] PierController

The Following Controllers has been `deleted` for now, these controllers may cause conflict because of blank foreign key Constraints so it will be deleted for now.

* Almost all models have been removed in order to avoid `missing` foreign constraints it will be `back` later on. 
* AdminLTE has been completely removed from assets `bye`.

### July 4, 2018
###### Maintenance
- tugboat.js are merged with custom.js
- some id's are changed to classes
- Simple Add and Edit views are added
- added 2 html files
    - infoModal.html 
    - viewSummaryModal.html


### Development `Phase 1` update `3`
### June 30, 2018
###### Added 3 Tugboat Maintenance 
- with Add, Edit and Delete(Sweet Alerts) view
- with Detailed and Card View

###### minor bug fix
- fixed a bug where images in edit view are not changed after selecting an image



### Development `Phase 1` update `2`

### June 24, 2018

* Merged JC-Branch to master to obtain new updates
* added the `new` base template `stisla admin`, has been transpose to .blade.php template and is functioning correctly
* added `stisla admin` assets in the public folder 
* `adminLTE`template is now `replaced`

### Development `Phase 1` update `1`

### May 19, 2018

###### Added the following Models: 
- `new` Agreement
- `new` Attachments
- `new` Barge
- `new` Berth
- `new` Company
- `new` ContractList
- `new` DispatchTicket
- `new` Employee
- `new` Equipments
- `new` Goods
- `new` Hauling
- `new` Insurance
- `new` Invoice
- `new` JobSchedule
- `new` Location
- `new` Payments
- `new` Pier
- `new` Position
- `new` PostBillingTicket
- `new` Quotations
- `new` Schedules
- `new` Services
- `new` StandardRates
- `new` Team
- `new` TermsandCondition
- `new` Tugboat
- `new` TugboatAssignment
- `new` TugboatClass
- `new` TugboatEquipments
- `new` TugboatInsurances
- `new` TugboatMainSpecifications
- `new` TugboatSpecifications
- `new` Users
- `new` UserType
- `new` Vessel

* Has a Sample of Create and Read for Berth Maintenance
* Added Admin-LTE for Base Template
* Added Semantic UI for Other Assests 

### Development `Phase 1`

### May 12, 2018
###### Added Controllers for Maintenance Modules
- [x] BerthController
- [x] ContractsController
- [x] EmployeeControgitller
- [x] EquipmentsController
- [x] PierController
- [x] TugboatsController
- [x] WebpagesController

added resources for controllers 


### May 28, 2018
###### Added 3 INITIAL Views
- Create - completed the necessary ui
- Edit - not fully working
- Index - no detailed view



