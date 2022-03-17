<template>
    <div>            
    <!-- /.card-header -->
    <TableContent  style="margin-top:-20px;"  v-if="typeof(dataList) == 'object'" :searchForm="searchForm" :sortingForm="sortingForm" :isAddItem="isAddItem" :isEditBtn="isEditBtn" :isDelBtn="isDelBtn" :isActionBtn="isActionBtn" :cardTitle="cardTitle" :columnsHead="columnsHead" :columnsBody="columnsBody" :dataList="dataList" :showEditForm="showEditForm" :deleteItem="deleteItem" :getDataList="getDataList" :excelFields="excelFields" :excelTitle="excelTitle" :isDownload="isDownload" :isSearchBox="isSearchBox" route="admin"></TableContent>

    <div class="modal fade" v-for="(dataItem, dataIndex) in dataList.data" :key="dataIndex" :id="'photo_deails'+dataItem.id" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Details</h1>
                   <button class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-response">
                        <thead>
                            <tr class="table-secondary">
                                <td>Category Name</td>                        
                                 <td>{{dataItem.category_name}}</td>
                            </tr>
                           
                            <tr>
                                 <td>Sub Category Name</td>
                                 <td>{{dataItem.sub_category_name}}</td>

                            </tr>
                           
                            <tr>
                                <td>Manufactures Name</td>
                                <td>{{dataItem.manufacturer_name}}</td>

                            </tr>
                            
                            <tr>
                                 <td>Generic Name</td>
                                 <td>{{dataItem.generic_name}}</td>

                            </tr>
                            <tr>
                                <td>Unit Name</td>
                                 <td>{{dataItem.unit_name}}</td>

                            </tr>
                            <tr>
                                <td>Product Name</td>
                                 <td>{{dataItem.product_name}}</td>

                            </tr>
                            <tr>
                                <td>Product Model</td>
                                 <td>{{dataItem.product_model}}</td>

                            </tr>
                            <tr>
                                <td>Regular Price</td>
                                 <td>{{dataItem.regular_price}}</td>

                            </tr>
                            <tr>
                                <td>Sale Price</td>
                                 <td>{{dataItem.sale_price}}</td>

                            </tr>
                            <tr>
                                <td>Weight</td>
                                 <td>{{dataItem.weight}}</td>

                            </tr>
                            <tr>
                                <td>Description</td>
                                 <td v-html="dataItem.description"></td>

                            </tr>
                         
                        </thead>
                        <tbody>
                                  
                           
                        </tbody>
                    </table>
                    
                    <div v-for="(imageItem, imageIndex) in dataItem.images" :key="imageIndex">
                        <img :src="dataItem.imageUrl+imageItem.product_image" alt="" style="width:60px; height:60px;" class="img-fluid m-2">
                         
                    </div>
                    <div>
                        <img :src="dataItem.qr_img" alt="" style="width:60px; height:60px;" class="img-fluid m-2">
                    </div>
                    
                    <!-- <center>
                        <button class="btn btn-success" @click="downloadWithCSS(dataItem)">Download PDF</button>

                    </center> -->
                    
                </div>
            </div>
        </div>
    </div>
    </div>


</template>
<script>
import mixin from '../../../js/src/mixin';
import jsPDF from 'jspdf' 
import html2canvas from "html2canvas"
export default {
    mixins:[mixin],
    data(){
        return {

        }
    },
    created(){
        this.generalApi = "product"
        this.cardTitle ="Product List"
        this.columnsHead.push('ID','Product Name','Product Model','Regular Price','Sale Price','Weight','Status', 'Details', 'QR Code', 'Action')
        this.columnsBody.push('product_name','product_model','regular_price','sale_price','weight','statusText', 'button', 'download')
        // this.columnsBodyExtra = 
        this.isDownload=false;
            
    }, 

    methods:{

       
    }
   
}
</script>
