# Database Notes

## employees
- `id`						INT
- `first_name`				VARCHAR(45)
- `last_name`				VARCHAR(45)
- `email`					VARCHAR(99)
- `phone_number`			INT
- `password`				VARCHAR(200)
- `alert_setting`			ENUM (email, sms, both, none)
- `admin`					TINYINT: 0 if not admin, 1 if admin
- `active`					TINYINT: 0 if inactive/on vacation, 1 if active
- `wants_spot`				TINYINT: 0 if no, 1 if yes
- `has_spot`				TINYINT: 0 if no, 1 if yes

## spots
- `spot_id`					INT
- `employee_id`				INT
- `lot_name`				ENUM (creepy, behind)
- `status`					ENUM (available, taken)
- `time_email_sent`			DATETIME

## open_spots
- `spot_id`					INT
- `employee_id`				INT
- `assigned_employee_id`	INT
- `open_date`				DATE
- `end_date`				DATE

## holidays
- `holiday`					DATE

## Workflow

#### giveUpSpot()
- In `spots`:
	- `status` for that spot is set to **available**
- In `open_spots`:
	- `employee_id`, `spot_id`, `open_date`, and `end_date` are added
	
#### sendNotification()
- `time_email_sent` is updated (after 30 min, new email is sent until spot accepted)

#### acceptSpot()
- In `employees`:
	- `wants_spot` for that employee is set to **0**
	- `has_spot` for that employee is set to **1**
- In `open_spots`:
	- `assigned_employee_id` is added





