import { createApp } from 'vue';
import { createWebHistory, createRouter } from "vue-router";

import DashboardAdmin   from "../dashboard/Admin.vue";
import DashboardStaff   from "../dashboard/Staff.vue";
import DashboardAdmin   from "../dashboard/.vue";
import HrmsEmployee     from "../hrms/Employee.vue";
import HrmsEmployees    from "../hrms/Employees.vue";

import InventoryItem                from "../inventory/Item.vue";
import InventoryItems               from "../inventory/Items.vue";
import InventoryPurchaseOrder       from "../inventory/PurchaseOrder.vue";
import InventoryPurchaseOrders      from "../inventory/PurchaseOrders.vue";
import InventoryVendor              from "../inventory/Vendor.vue";
import InventoryVendors             from "../inventory/Vendors.vue";
import InventoryVendorContacts      from "../inventory/VendorContacts.vue";
import InventoryVendorSupplies      from "../inventory/VendorSupplies.vue";


const routes = [
    { path: "/home", name: "Home", component: Home,},
    { path: "/hrms/employees", name: "Hrms Employees", component: HrmsEmployees,},
    { path: "/hrms/employees/:id", name: "Hrms Employee Detail", component: HrmsEmployee,},

    { path: "/inventory/items", name: "Inventory Items", component: InventoryItems,},
    { path: "/inventory/items/:id", name: "Inventory Item Details", component: InventoryItem,},

    { path: "/inventory/purchase_orders", name: "Inventory Purchase Orders", component: InventoryPurchaseOrders,},
    { path: "/inventory/purchase_orders/:id", name: "Inventory Purchase Order Details", component: InventoryPurchaseOrder,},
    
    { path: "/inventory/vendors", name: "Invnentory Vendors", component: InventoryVendors,},
    { path: "/inventory/vendor/:id", name: "Vendor Detail", component: InventoryVendor,},

    { path: "/pos/orders", name: "POS Orders", component: PosOrders,},
    { path: "/pos/orders/:id", name: "POS Order Detail", component: PosOrder,},

];
  
const router = createRouter({
    history: createWebHistory(),
    routes,
});
  
export default router;
