@extends('layouts.main')
@section('dropdown')
<div class="dropdown">
                    <button class="dropbtn">{{ Auth::user()->name }}</button>
                    <div class="dropdown-content">
                      
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a  href="/home"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                        <a href="/users2">Check users </a>
                        <a href="/reservations">Check Reservation </a>
                    </div>
</div>
@endsection
@section('content')

<div><h2>if you are seing this you are admin </h2></div>

    <link rel="stylesheet" href="css/users.css">
    <div class="container crud-table" ng-app="myApp" ng-controller="namesCtrl">
      <div class="clearfix">
        <div class="form-inline pull-left">
          <button class="btn btn-success" ng-click="addUser()"><span class="glyphicon glyphicon-plus"> </span>Add more user</button>
        </div>
        <div class="form-inline pull-right">Search by name:
          <div class="form-group">
            <input class="form-control" type="text" ng-model="searchName" placeholder="Type name to search"/>
          </div>
        </div>
      </div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th ng-click="orderBy('name')">Name</th>
            <th ng-click="orderBy('country')">Country</th>
            <th ng-click="orderBy('salary')">Salary</th>
            <th ng-click="orderBy('email')">Email</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr ng-repeat="user in resultUser = (users | filter: {'name': searchName}) | orderBy: order">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <button class="btn btn-primary" ng-click="editUser(user)">Edit</button>
            </td>
            <td> 
              <button class="btn btn-danger" ng-click="deleteUser(user)">Delete</button>
            </td>
          </tr>
          <tr class="text-left">
            <td colspan="2"> <b>Total</b></td>
            <td class="text-center"></td>
            <td colspan="3"></td>
          </tr>
        </tbody>
      </table>
      <div class="crude-form__wrapper" ng-show="triggerForm">
        <h3 ng-show="editForm">Edit user</h3>
        <h3 ng-show="addForm">Add user</h3>
        <form name="userForm" ng-model="userForm">
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="editName" type="text" name="name" ng-model="crudFormName" placeholder="Edit name" required="required"/>
            <div class="form-alert alert alert-danger" ng-show="userForm.name.$invalid &amp;&amp; userForm.name.$touched">Please input name</div>
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <input class="form-control" id="editCounty" type="text" name="country" ng-model="crudFormCountry" placeholder="Edit country" required="required"/>
            <div class="form-alert alert alert-danger" ng-show="userForm.country.$invalid &amp;&amp; userForm.country.$touched">Please input user country</div>
          </div>
          <div class="form-group">
            <label for="salary">Salary</label>
            <input class="form-control" id="editSalary" type="number" name="salary" ng-model="crudFormSalary" placeholder="Edit salary" min="1" required="required"/>
            <div class="form-alert alert alert-danger" ng-show="userForm.salary.$invalid &amp;&amp; userForm.salary.$touched"><span ng-show="userForm.salary.$error.number">Please input valid number</span><span ng-show="userForm.salary.$error.min">Please input salary greater than 1</span><span ng-show="userForm.salary.$error.required">Please input salary</span></div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="editEmail" type="email" name="email" ng-model="crudFormEmail" ng-change="checkEmail(editUserId)" placeholder="Edit email" required="required" min="1"/>
          </div>
          <div class="form-alert alert alert-danger" ng-show="userForm.email.$invalid &amp;&amp; userForm.email.$touched"><span ng-show="userForm.email.$error.email">Please input valid email</span><span ng-show="userForm.email.$error.required">Please input email</span></div>
          <div class="form-alert alert alert-danger" ng-show="emailExisted">This email has been registerd by other user</div>
          <button class="btn btn-primary" ng-click="saveEdit(editUserId)" ng-disabled="userForm.$invalid || emailExisted"> <i class="glyphicon glyphicon-pencil"> </i>Save change</button>
          <button class="btn btn-primary" ng-click="triggerForm = false">
             Cancel</button>
        </form>
      </div>
    </div>

    <script src="js/users.js"></script>


@endsection
