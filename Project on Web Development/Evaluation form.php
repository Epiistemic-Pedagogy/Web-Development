<html>
<head>

    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript"></script>
            

    <title>Evaluation Form</title>


</head>

<body>

<div id="container">
<div id="header"><a class="menu" href="index.php">Home</a> | <a class="menu" href="AboutUs.php">Faculty</a> 
| <a class="menu" href="Resources.php">Events</a> | <a class="menu" href="Evaluation form.php">Evaluation</a></div>
<h1>Center for Applied Research in Information Technology</h1>
<h1>(C.A.R.I.T)</h1>
<p>
<div id="logo">
<a class="highlight" href ="https://ccse.kennesaw.edu/" target="_blank">
<img src="./Img/CARIT LOGO.jpg" alt="CARIT LOGO" width="700"; height="400" target></a>
</div>
<p>
    <div id="spring"><li class="highlight">Politics</li>
    <li class="highlight">Sports</li>
    <li class="highlight">Health</li>
    <li class="highlight">Technology</li>
    <li class="highlight">Agriculture</li>
    </div> 

    <h1>Evaluation Form for Summer Assistant Position Openings</h1>
    <div id="logo"><h2>CARIT has four open positions for the role of students assistant. The minimum GPA requirement are listed below</div>
    <br>

    <h1><div id="spring"><table bgcolour="black" width="700">

        <tr>
            <th>Students status</th>
            <th>Required Completed Courses</th>
            <th>Grade average required</th>
        </tr>

    </tr>
        <tr class="highlight" bgcolor="grey">
            <td width="100">Undergraduate</td>
            <td>
            <ol>
             <li>CSE 3202 Mobile System Overview</li>
            <li>IT 4213 Mobile Web Development</li>
            <li>IT 4777 Business Analytics</li>
            <li>IT 5000 Computer Systems Aministration</li>
            </ol>
            </td>
            <td>>3.2</td>
                        </tr>

    </tr>
    <tr class="highlight" bgcolor="lightgrey">
        <td>Graduate</td>
        <td>
            <ol>
            <li>IT 7113 Data Visualization</li>
            <li>IT 6713 Business Intelligence</li>
            <li>IT 6000 Cyber Secuity</li>
            <li>IT 7000 Machine Learning</li>
            </ol>
        </td>
        <td>>3.7</td>
    </tr>
</table>
</div></h1>
<br>


<center>
    <form>

    </br>
    </br>
    <div id="box"><p> Hi Students, This is where you can check your eligibility to apply for student assistant position.
You can fill the form to know your status and select your grades and click on evaluate to know what your status is.</p></div>
<br>
<br>
    <p2>Student Status:</p2>
    
<select id="StudentStatusSelect" onchange='StudentStatusChage(this.value)'>
    <option value="a">select</option>
    <option value="b">Under Graduate</option>
    <option value="c">Graduate</option>
    </select>
    </br>
    </br>
    <table id="courseTable" border="1">
    <tr>
    <th>
    Course
    </th>
    <th>
    Grade obtained
    </th>
    </tr>
    
    <tr>
    <th>
    <label id="subject1"></label>
    </th>
    <th>
    <select id="subject1Grade">
    <option value="4">a</option>
    <option value="3">b</option>
    <option value="2">c</option>
    <option value="1">d</option>
    <option value="0">f</option>
    </select>
    </th>
    </tr>
    <tr>
    <th>
    <label id="subject2"></label>
    </th>
    <th>
    <select id="subject2Grade">
    <option value="4">a</option>
    <option value="3">b</option>
    <option value="2">c</option>
    <option value="1">d</option>
    <option value="0">f</option>
    </select>
    </th>
    </tr>
    
    <tr>
    <th>
    <label id="subject3"></label>
    </th>
    <th>
    <select id="subject3Grade">
    <option value="4">a</option>
    <option value="3">b</option>
    <option value="2">c</option>
    <option value="1">d</option>
    <option value="0">f</option>
    </select>
    </th>
    </tr>
    <tr>
    <th>
    <label id="subject4"></label>
    </th>
    <th>
    <select id="subject4Grade">
    <option value="4">a</option>
    <option value="3">b</option>
    <option value="2">c</option>
    <option value="1">d</option>
    <option value="0">f</option>
    </select>
    </th>
    </tr>
    </table>
    </br> 
    </form>
    
    <button id="evaluateButton" type="button" onclick="evalute()">Evaluate</button>
    </br>
    </br>
    <label id="msg"></label>
    </center>
    
    <script>
    document.getElementById("courseTable").style.visibility = "hidden";
    document.getElementById("evaluateButton").style.visibility = "hidden";
    function StudentStatusChage(value) {
    if(value == 'b')
    {
    document.getElementById("courseTable").style.visibility = "visible";
    document.getElementById("evaluateButton").style.visibility = "visible";
    document.getElementById("subject1").innerHTML = "CSE 3203 Mobile System Overview";
    document.getElementById("subject2").innerHTML = "IT 4213 Mobile Web Development";
    document.getElementById("subject3").innerHTML = " IT 4777 Business Analytics";
    document.getElementById("subject4").innerHTML = "IT 5000 COmuputer System Administrarion";
    
    }
    if(value == 'c')
    {
    document.getElementById("courseTable").style.visibility = "visible";
    document.getElementById("evaluateButton").style.visibility = "visible";
    document.getElementById("subject1").innerHTML = "IT 7113 Data Visualization";
    document.getElementById("subject2").innerHTML = "IT 6713 Business Inteligence";
    document.getElementById("subject3").innerHTML = "IT 6000 Cyber Security";
    document.getElementById("subject4").innerHTML = "IT 7000 Machine Learning";
    }
    if(value == 'a')
    {
    document.getElementById("courseTable").style.visibility = "hidden";
    document.getElementById("evaluateButton").style.visibility = "hidden";
    }
    }
    
    function evalute()
    {
    var a=document.getElementById("subject1Grade").value;
    var b=document.getElementById("subject2Grade").value;
    var c=document.getElementById("subject3Grade").value;
    var d=document.getElementById("subject4Grade").value;
    var grade,averagemarks;
    
    if(document.getElementById("StudentStatusSelect").value=='b')
    {
    averagemarks=(Number(a)+Number(b)+Number(c)+Number(d))/4 ;
    
    if(averagemarks>3.2)
    {
    
    document.getElementById("msg").innerHTML = "Congratulations, you are qualified for the postion. Please click the link <a href='Application.php'>Application</a>";
;
    }
    else
    {
    document.getElementById("msg").innerHTML = "Your Sorry, You did not meet the criteria";
    }
    }
    if(document.getElementById("StudentStatusSelect").value=='c')
    {
    if((Number(a)+Number(b)+Number(c)+Number(d))/4 >3.7)
    {
    document.getElementById("msg").innerHTML = "Congratulations you are qualified for the postion. Please click the link <a href='Application.php'>Application</a>";
    }
    else
    {
    document.getElementById("msg").innerHTML = "Sorry, You did not meet the criteria";
    }
    }
    }
    </script>





<a class="highlight" href ="https://ccse.kennesaw.edu/" target="_blank">
    <img src="./Img/K.S.U LOGO.PNG" width="100"; height="100" target>
    </a>
    <p>
    <p>
    <p>
    <a class="highlight" href ="https://ccse.kennesaw.edu/it/"><h4>K.S.U Information Technology.</h4>
        <br>
        <br>
         <a class="highlight" href ="http://it5443.azurewebsites.net"><h4>This is a class project of IT 5443 spring group.</h4>
           
       
        </div>
                    
        <footer>
             <h4 class="highlight">All @ Copy rights reserved to Carit web applicaton</h4>
        </footer>
        
        </body>
        
        </html>