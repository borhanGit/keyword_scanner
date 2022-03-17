<template>
    <div>
        <form class="form" @submit.prevent="processData()">
            <div class="row" style="margin-top:-20px;">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ cardTitle }}</h3>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <input type="hidden" name="category_id" v-model="inputData.category_id">
                                       <v-select :options="categories" :reduce="category => category.id" label="category_name" @input="onChangeCategory" v-model="inputData.category_id" placeholder="Select Category"></v-select>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="">Manufactures</label>
                                        <input type="hidden" name="manufacturer_id" v-model="inputData.manufacturer_id">
                                       <v-select :options="manufactures" :reduce="manufacture => manufacture.id" label="manufacturer_name" v-model="inputData.manufacturer_id" placeholder="Select Manufactures"></v-select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Unit</label>
                                        <input type="hidden" name="unit_id" v-model="inputData.unit_id">
                                       <v-select :options="units" :reduce="unit => unit.id" label="unit_name" v-model="inputData.unit_id" placeholder="Select Unit"></v-select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Product Name</label>
                                        <input type="text" name="product_name" v-model="inputData.product_name" class="form-control"
                                            placeholder="">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Regular Price</label>
                                        <input type="text" name="regular_price" v-model="inputData.regular_price" class="form-control"
                                            placeholder="">

                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Weight</label>
                                        <input type="text" name="weight" v-model="inputData.weight" class="form-control"
                                            placeholder="">

                                    </div>
                                   
                                     <div class="form-group">
                                        <label for="">Photo</label>
                                        <input type="file" name="product_image[]" class="form-control" multiple>
                                        <div class="mt-4" v-if="isEdit">
                                            <div class="float-left" v-for="(image, index) in inputData.product_image" :key="index">
                                                 <a href="javascript:void(0)" @click="deleteItem(inputData.id, image.id)"><i class="fa fa-trash"></i></a>
                                            <img class="rounded" style="width:100px; height:100px;"  :src="inputData.imageUrl+image.product_image"> 
                                           <!-- v-for="(image,index) in inputData.images" :key="index"  -->
                                            </div>

                                        </div>

                                    </div>
                                    
                    
                                </div><!--col-6 end-->
                                <div class="col-md-6">   
                                     <div class="form-group">
                                        <label for="">Sub Category</label>
                                        <!-- <select v-if="isEditSubCategory" class="form-control">
                                            <option>{{ inputData.sub_category_name }}</option>
                                        </select> -->
                                        <input type="hidden" name="sub_category_id" v-model="inputData.sub_category_id">
                                       <v-select :options="isEdit?inputData.subcategories:subcategories" :reduce="subcategory => subcategory.id" label="sub_category_name" v-model="inputData.sub_category_id" placeholder="Select Sub Category"></v-select>
                                    </div>   
                                    <div class="form-group">
                                        <label for="">Generic</label>
                                        <input type="hidden" name="generic_id" v-model="inputData.generic_id">
                                       <v-select :options="generic" :reduce="generi => generi.id" label="generic_name" v-model="inputData.generic_id" placeholder="Select Generic"></v-select>
                                    </div>
                                                        
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="hidden" name="status" v-model="inputData.status">
                                       <v-select :options="status" :reduce="statu => statu.value" label="name" v-model="inputData.status" placeholder="Select Status"></v-select>
                                    </div>
                                     <div class="form-group">
                                        <label for="">Product Model</label>
                                        <input type="hidden" name="qrCode" v-model="inputData.qrCode">
                                        <input type="text" name="product_model" v-model="inputData.product_model" class="form-control"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sale Price</label>
                                        <input type="text" name="sale_price" v-model="inputData.sale_price" class="form-control"
                                            placeholder="">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Product Description</label>
                                        <textarea name="description" v-model="inputData.description" style="display:none;"></textarea>
                                        <ckeditor name="description" v-model="inputData.description"  :editor="editor" :config="editorConfig" ></ckeditor>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <FormButton :isEdit="isEdit" :backUrl="backUrl"></FormButton>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import mixin from '../../../js/src/mixin';
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    export default {
        mixins: [mixin],
        data(){
            return {
                editor:ClassicEditor,
                status:[
                    {name:'Active',value:1},
                    {name:'Inactive',value:0}
                ],
                categories   : [],
                subcategories: [],
                manufactures : [],
                generic      : [],
                units        : [],
                isEditSubCategory:false,
                website: '',
                generateQrCodeUrl: '',
               

                editorConfig:{
                    //  alignment: {
                    //     options: [ 'left', 'right' ]
                    // },
                    //  toolbar: [
                    //     'alignment'
                    // ]
                }
            }
        },
        created() {
          


            this.generalApi = 'product'
            this.backUrl = '/product'
            this.isImage = 'product_image'
            this.isFile = true
            this.cardTitle = this.isEdit ? 'Edit Product' : 'Add Product'
            if(this.isEdit){
                this.isEditSubCategory = true
            }
            // this.generateQrCodeUrl = `http://api.qrserver.com/v1/create-qr-code/?data=${this.inputData.product_model}!&size=150x150`

           

            axios.get(this.url+'/api/'+this.generalApi)
            .then(res => {
                this.categories    = res.data.categories
                // this.subcategories = res.data.subCategory
                this.manufactures  = res.data.manufacturer
                this.generic       = res.data.generic
                this.units         = res.data.unit
               
                
            })
        },
         methods:{
           
            onChangeCategory(name){
                            
                axios.post(this.url+'/api/category-wise-subCategory', {name:name})
               .then(res => {
                                    
                  
                   if(this.isEdit){
                       
                       this.inputData.subcategories = res.data.subcategories

                   } else {

                        this.subcategories = res.data.subcategories

                   }
               
               })
            },
            // generateQrCodeUrl(){
            //     this.generateQrCodeUrl = `http://api.qrserver.com/v1/create-qr-code/?data=${this.inputData.product_model}!&size=150x150`
            // },
            
            // isWebsite() {
            //     /* eslint-disable-next-line */
            //   const regex = /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+(:[0-9]+)?|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/g;
            //     return this.website.match(regex) === null;
            //  },
            }


    }

</script>
