<div class="container">
   <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand">fotiface</a>
         <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="nav-link" href="#!home">Home</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="#!user">User</a>
               </li>
            </ul>
         </div>
      </nav>
   </div>

   <div class="container-fluid">
      <h1>{{title}}</h1>

      <div class="container">
         <p>User List</p>
         <table class="user">
            <tr>
               <th>ID</th>
               <th>Username</th>
            </tr>
            <tr ng-repeat="u in user">
               <td>{{u.id}}</td>
               <td>{{u.username}}</td>
            </tr>
         </table>
      </div>
   </div>
</div>