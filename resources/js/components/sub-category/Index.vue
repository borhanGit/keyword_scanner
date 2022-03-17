<template>            <!-- /.card-header -->
    <TableContent  style="margin-top:-20px;"  v-if="typeof(dataList) == 'object'" :searchForm="searchForm" :sortingForm="sortingForm" :isAddItem="isAddItem" :isEditBtn="isEditBtn" :isDelBtn="isDelBtn" :isActionBtn="isActionBtn" :cardTitle="cardTitle" :columnsHead="columnsHead" :columnsBody="columnsBody" :dataList="dataList" :showEditForm="showEditForm" :deleteItem="deleteItem" :getDataList="getDataList" :excelFields="excelFields" :excelTitle="excelTitle" :isDownload="isDownload" :isSearchBox="isSearchBox" route="admin"></TableContent>
</template>
<script>
import mixin from '../../../js/src/mixin';
export default {
    mixins:[mixin],
    data(){
        return {

        }
    },
    created(){
        this.generalApi = "sub-category"
        this.cardTitle ="Sub Category List"
        this.columnsHead.push('ID','Category Name','Sub Category Name', 'Description', 'Status', 'Action')
        this.columnsBody.push('category_name','sub_category_name', 'description', 'statusText')
        // this.columnsBodyExtra = 
        this.isDownload=false;
            
    }, 
   
}
</script>
