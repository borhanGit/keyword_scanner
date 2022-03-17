<template>
    <div>
        <h6>Admin Panel</h6>
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{totalCategory}}</h3>

                <p>Total Category</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <router-link to="/admin-sm" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{totalSubCategory}}
                  <!-- <sup style="font-size: 20px">%</sup> -->
                </h3>

                <p>Total Sub Category </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <router-link to="/admin-rsm" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{totalProduct}}</h3>

                <p>Total Product</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <router-link to="/admin-dsm" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link> -->
            </div>
          </div>
          <!-- ./col -->
          
        </div>
        
       
        
    </div>
</template>
<script>

export default {
  data(){
    return {
      url             : window.location.origin,
      totalCategory   : '',
      totalSubCategory: '',
      totalProduct    : '',
      
    }
  },
  created(){
    
  axios.get(this.url+'/api/total-panel-user')
    .then(res => {
      this.totalCategory    = res.data.totalCategory 
      this.totalSubCategory = res.data.totalSubCategory
      this.totalProduct     = res.data.totalProduct
      
    })
  }
}
</script>