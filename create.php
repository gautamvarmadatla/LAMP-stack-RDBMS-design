<!DOCTYPE html>
<html>

<body>
    <style>
        .button{
            background-color: coral;
            font-family: monospace;
}
    </style>


    <center><h2 style="font-family: 'Courier New';">Add new employee</h2><br><br><br><br><br>

    <form action="insert.php" method="POST">
        <label for="emp_no"><b>emp_no</b></label>
        <input type="text" placeholder="Enter employee's number" name="emp_no" required> <br> <br>
       
        <label for="emp_name"><b>emp_name</b></label>
        <input type="text" placeholder="Enter employee's name" name="emp_name" required> <br> <br>
       
	 <label for="emp_personal_no"><b> emp_personal_no </b></label>
        <input type="tel" name="emp_personal_no" id="emp_personal_no" placeholder="Enter customer phone number" name="emp_personal_no" required> <br> <br>
        
	<label for="emp_curr_job_id"><b>emp_curr_job_id</b></label>
        <input type="text" placeholder="Enter employee's current job ID" name="emp_curr_job_id" required> <br> <br>
        
	<label for="emp_curr_proj_id"><b>emp_curr_job_id</b></label>
        <input type="text" placeholder="Enter employee's current project ID" name="emp_curr_proj_id" required> <br> <br>

        <label for="emp_dept_name"><b>emp_dept_name</b></label>
        <input type="text" placeholder="Enter employee's department" name="emp_dept_name" required> <br> <br>

        <label for="emp_room_no"><b>emp_room_no</b></label>
        <input type="text" placeholder="Enter employee's office room number " name="emp_room_no" required> <br> <br>

        <label for="emp_build_no"><b>emp_build_no</b></label>
        <input type="text" placeholder="Enter employee's building number" name="emp_build_no" required> <br> <br>

	<label for="emp_job_title"><b>emp_job_title</b></label>
        <input type="text" placeholder="Enter employee's job title" name="emp_job_title" required> <br> <br>

	<label for="job_date_started"><b>job_date_started</b></label>
        <input type="text" placeholder="Enter employement start date" name="job_date_started" required> <br> <br>

	<label for="emp_job_salary"><b>emp_job_salary</b></label>
        <input type="text" placeholder="Enter employee's salary" name="emp_job_salary" required> <br> <br>




        <div class="clearfix">
            <button class="button" type="button" onclick="window.location.href='index.html'" class="cancelbtn"><b> Cancel </b> </button>
            <button class="button" type="submit" name="submit"><b> Submit </b> </button>
        </div>
        </div>
    </form>
</center>
    
</body>

</html>