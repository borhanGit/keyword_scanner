<template>
    <div>
          <li class="nav-item">
              <router-link to="/admin-dashboard" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
              </router-link>
          </li>
          <!-- <li class="nav-item" v-if="this.$store.getters.user.user">
            <router-link @click.prevent="showEditForm(this.$store.getters.user.user.id)" :to="'/admin-profile/'+this.$store.getters.user.user.id" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                My Profile
              </p>
            </router-link>
          </li>     -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-list-alt"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/sub-category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sub Category</p>
                </router-link>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-industry"></i>
              <p>
                Manufacturer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/manufacturer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Manufacturer</p>
                </router-link>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-users"></i>
              <p>
                Generic Name
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/generic" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Generic Name</p>
                </router-link>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-list"></i>
              <p>
               Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/units" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Units</p>
                </router-link>
              </li>
              
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/product" class="nav-link" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </router-link>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" @click.prevent="signOut">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
    </div>
</template>
<script>
export default {
    props:['signOut']
}
</script>