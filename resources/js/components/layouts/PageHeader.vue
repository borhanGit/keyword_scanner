<template>
 <section class="content-header" style="margin-top:-20px;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 mt-2">
            <span style="font-size: 20px;">QR Generate</span>
          </div>
          <div class="col-sm-6 mt-2">
            <Breadcrumbs class="float-sm-right"/>
          <!-- <router-link :to="items.path" class="your-custom-class"  > -->
              <!-- <app-breadcrumbs to="/" container="nav" class="list-unstyled breadcrumb float-sm-right text-primary">
          <h6 slot-scope="{items, label, utils}">
    <router-link
      :to="items.path"
      class="your-custom-class"
      exact
      :itemprop="utils && utils.itemprop"
    >{{label}}</router-link>
    <i class="fas fa-angle-right"></i>
  </h6>
            </app-breadcrumbs> -->
            <!-- </router-link> -->
            <!-- <ol class="breadcrumb float-sm-right"> -->
              <!-- <Breadcrumbs/> -->
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Vision</li> -->
          
                <!-- <Breadcrumbs> -->
                   
               <!-- </Breadcrumbs> -->
                 <!-- <b-breadcrumb>
                    <b-breadcrumb-item to="/">Home</b-breadcrumb-item>
                    <b-breadcrumb-item v-for="item in items" :key="item.path" :to="item.path" >{{item.name}}</b-breadcrumb-item>
                   
               </b-breadcrumb> -->
            
            <!-- </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
</template>
<script>
// import Vue from 'vue';
// import VueBreadcrumbs from 'vue-2-breadcrumbs';
 
// Vue.use(VueBreadcrumbs)
export default {
  // data(){
  //   items:[]
  // },
  // watch:{
  //   $route(){
  //     this.getRoute();

  //   }

  // },
  methods:{
    // getRoute(){
    //   this.items = this.$route.matched;
    //   console.log(this.$route);

    // },
      getPath(){

   },
   getBreadcrumb(){
     
   },
  }  ,
  // created(){
  //   this.getRoute();
  // },
}
</script>