
import Home from '../components/admin-panel/Home'
import SignIn from '../components/auth/SignIn'
import Register from '../components/auth/Register'
import AdminProfile from '../components/admin-panel/admins/Profile'
import Admin from '../components/admin-panel/admins/Index'
import AdminDashboard from '../components/admin-panel/dashboard/Index'
import AdminCreate from '../components/admin-panel/admins/Create'
// category start
import Category from '../components/category/Index'
import CategoryCreate from '../components/category/Create'
// category end
// sub category start
import SubCategory from '../components/sub-category/Index'
import SubCategoryCreate from '../components/sub-category/Create'
// sub category end
// Manufacturer start
import Manufacturer from '../components/manufacturer/Index'
import ManufacturerCreate from '../components/manufacturer/Create'
// Manufacturer end
// generic  start
import Generic from '../components/generic/Index'
import GenericCreate from '../components/generic/Create'
// generic end
// Unit  start
import Units from '../components/units/Index'
import UnitsCreate from '../components/units/Create'
// Unit end
// product  start
import Product from '../components/product/Index'
import ProductCreate from '../components/product/Create'
// product end






let routesAdmin = [
    {
        name:'Home',
        path:'/',
        component:Home,
        
        meta: {
            auth: true,
            breadcrumb: {
                label: 'Home',
                
              }
          }

    }, 
    {
        name:'SignIn',
        path:'/signin',
        component:SignIn,
        meta: {
            auth:false,
            breadcrumb: 'SignIn',
            disableIfLoggedIn: true
          }

    }, 
    {
        name:'Register',
        path:'/register',
        component:Register,
        meta: {
            auth:true,
            breadcrumb: {
                label: 'Register',
                
              }
          }

    }, 
    {
        name:'AdminProfile',
        path:'/admin-profile/:id',
        component:AdminProfile,
        meta:{
            auth: true,
            breadcrumb: {
                label: 'AdminProfile',
                
              }
        }
    }, 
    {
        name:'Admin',
        path:'/admin',
        component:Admin,
        meta:{
            auth: true,
            breadcrumb: {
                label: 'Admin',
                
              }
        }
    }, 
    {
        name:'AdminCreate',
        path:'/admin/create',
        component:AdminCreate,
        meta:{
            auth: true,
            breadcrumb: {
                label: 'AdminCreate',
                
              }
        }
    }, 
    {
        name:'AdminCreate',
        path:'/admin/:id',
        component:AdminCreate,
        meta:{
            auth: true,
            breadcrumb: {
                label: 'AdminCreate',
                
              }
        }
    }, 
    {
        name:'AdminDashboard',
        path:'/admin-dashboard',
        component:AdminDashboard,
        meta:{
            auth: true,
            breadcrumb: {
                label: 'AdminDashboard',
                
              }
        
        }
    },
    {
        name:'Category',
        path:'/category',
        component:Category,
        meta:{
            auth: true,
            breadcrumb: {
                label: 'Category',
                
              }
        }
    }, 
    {
    name:'CategoryCreate',
    path:'/category/create',
    component:CategoryCreate,
    meta:{
        auth: true,
        breadcrumb: {
            label: 'CategoryCreate',
            
          }
    }
}, 
{
    name:'CategoryCreate',
    path:'/category/:id',
    component:CategoryCreate,
    meta:{
        auth: true,
        breadcrumb: {
            label: 'CategoryCreate',
            
          }
    }
}, 
// sub category start
{
    name:'SubCategory',
    path:'/sub-category',
    component:SubCategory,
    meta:{
        auth: true,
        breadcrumb: {
            label: 'SubCategory',
            
          }
    }
}, 
{
name:'SubCategoryCreate',
path:'/sub-category/create',
component:SubCategoryCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'SubCategoryCreate',
        
      }
}
}, 
{
name:'SubCategoryCreate',
path:'/sub-category/:id',
component:SubCategoryCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'SubCategoryCreate',
        
      }
}
}, 
// sub category end
// manufacturer start
{
    name:'Manufacturer',
    path:'/manufacturer',
    component:Manufacturer,
    meta:{
        auth: true,
        breadcrumb: {
            label: 'Manufacturer',
            
          }
    }
}, 
{
name:'ManufacturerCreate',
path:'/manufacturer/create',
component:ManufacturerCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'ManufacturerCreate',
        
      }
}
}, 
{
name:'ManufacturerCreate',
path:'/manufacturer/:id',
component:ManufacturerCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'ManufacturerCreate',
        
      }
}
}, 
// manufacturer end
// generic start
{
    name:'Generic',
    path:'/generic',
    component:Generic,
    meta:{
        auth: true,
        breadcrumb: {
            label: 'Generic',
            
          }
    }
}, 
{
name:'GenericCreate',
path:'/generic/create',
component:GenericCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'GenericCreate',
        
      }
}
}, 
{
name:'GenericCreate',
path:'/generic/:id',
component:GenericCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'GenericCreate',
        
      }
}
}, 
// generic end
// Unit start
{
    name:'Units',
    path:'/units',
    component:Units,
    meta:{
        auth: true,
        breadcrumb: {
            label: 'Units',
            
          }
    }
}, 
{
name:'UnitsCreate',
path:'/units/create',
component:UnitsCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'UnitsCreate',
        
      }
}
}, 
{
name:'UnitsCreate',
path:'/units/:id',
component:UnitsCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'UnitsCreate',
        
      }
}
}, 
// Unit end
// Product start
{
    name:'Product',
    path:'/product',
    component:Product,
    meta:{
        auth: true,
        breadcrumb: {
            label: 'Product',
            
          }
    }
}, 
{
name:'ProductCreate',
path:'/product/create',
component:ProductCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'ProductCreate',
        
      }
}
}, 
{
name:'ProductCreate',
path:'/product/:id',
component:ProductCreate,
meta:{
    auth: true,
    breadcrumb: {
        label: 'ProductCreate',
        
      }
}
}, 
// Product end
    

];

export default routesAdmin