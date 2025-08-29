<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <div class="menu">
  <span id="toggle">
    <span id='line'></span>
    <span id='line'></span>
    <span id='line'></span>
  </span>
            <li><a href="./home.php"><i class="fas fa-home"></i> <span class="list">Home</span></a></li>
            <!-- <li><a href="announcement.php"><i class="fas fa-bullhorn"></i> Announcement</a></li> -->

            <li class="announcement">
            <a href="#" id="toggle-announce" style="display: flex; justify-content:flex-start; gap: 10px;align-items: center;">
                <span><i class="fas fa-bullhorn"></i> <span class="list">Announcement  <i class="fas fa-chevron-down" id="announce-chevron"></i></span></span>
               
              </a>
              <span class="list">
              <ul id="announcement-submenus" class='drop'>
                    <li><a href="../dashboard/announce_students.php">For Students</a></li>
                    <li><a href="../dashboard/announce_teachers.php">For Teachers</a></li>
                </ul>
              </span>
              
            </li>
            <!-- <li><a href=""><i class="fas fa-users"></i> User List</a></li> -->

    <li class="lists">
    <a href="#" id="toggle-users" style="display: flex; justify-content:flex-start; gap: 10px; align-items: center;">
      <span><i class="fas fa-users"></i> <span class="list">Users List
      <i class="fas fa-chevron-down" id="user-chevron"></i></span></span>
    </a>
    <span class="list">
    <ul id="user-submenu" class='drop'>
      <li><a href="./students_list.php">Students</a></li>
      <li><a href="./teachers_list.php">Teachers</a></li>
    </ul>
    </span>
   
  </li>
 <!-- <li><a href=""><i class="fas fa-user"></i> Add User</a></li> -->
            <li class="add">
            <a href="#" id="toggle-add" style="display: flex; justify-content:flex-start; gap: 10px;align-items: center;">
                <span><i class="fas fa-user"></i> <span class="list">Add Users
                <i class="fas fa-chevron-down" id="users-chevron"></i></span></span>
              </a>
              <span class="list">
             
                <ul id="user-submenus" class='drop'>
                    <li><a href="../forms/signup_student.php">Students</a></li>
                    <li><a href="../forms/signup_teacher.php">Teachers</a></li>

                </ul>
                   
              </span>
            </li>

            <!-- <li><a href="manageUsers.php"><i class="fas fa-cog"></i> Manage Users</a></li> -->

            <li class="manage">
            <a href="#" id="toggle-manage" style="display: flex; justify-content:flex-start; gap: 10px;align-items: center;">
                <span><i class="fas fa-bullhorn"></i> <span class="list">Manage Users
                <i class="fas fa-chevron-down" id="manage-chevron"></i></span></span>
              </a>
              <span class="list">
              <ul id="manage-submenus" class='drop'>
                    <li><a href="./manage_students.php">Students</a></li>
                    <li><a href="./manage_teachers.php">Teachers</a></li>
                </ul>
              </span>
                
            </li>
            <li><a href="./addSubject.php"><i class="fas fa-book-open"></i><span class="list"> Add Subject</a></li></span>
            <li><a href="./manageSubject.php"><i class="fas fa-cogs"></i> <span class="list">Manage Subject</a></li></span>
        </div>
        <!-- <div class="dashboard-text">
          <h1>dashboard</h1>
        </div> -->
<!-- </div> -->
<script src='../js/drop_add.js'></script>
<script src='../js/drop_list.js'></script>
<script src='../js/drop_announcement.js'></script>
<script src='../js/drop_manage_users.js'></script>
<script src='../js/toggle.js'></script>

</body>
</html>