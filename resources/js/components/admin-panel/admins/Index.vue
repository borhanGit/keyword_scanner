<template>            <!-- /.card-header -->
   <TableContent  style="margin-top:-20px;"  v-if="typeof(dataList) == 'object'" :searchForm="searchForm" :sortingForm="sortingForm" :isAddItem="isAddItem" :isEditBtn="isEditBtn" :isDelBtn="isDelBtn" :isActionBtn="isActionBtn" :cardTitle="cardTitle" :columnsHead="columnsHead" :columnsBody="columnsBody" :dataList="dataList" :showEditForm="showEditForm" :deleteItem="deleteItem" :getDataList="getDataList" :excelFields="excelFields" :excelTitle="excelTitle" :isDownload="isDownload" :isSearchBox="isSearchBox" route="admin"></TableContent>
</template>
<script>
import mixin from '../../../src/mixin';
export default {
    mixins:[mixin],

    created(){
        this.generalApi = "admin"
        this.dataSearchingApi="search-admin-data"
        this.cardTitle ="Admin List" 
        this.columnsHead.push('Sn','Name', 'Email', 'User ID','Password', 'Role', 'Action')
        this.columnsBody.push('name', 'email', 'user_id','password', 'role')
        // this.columnsBodyExtra = 
        this.isDownload=false;

       
        
    }
}
</script>
