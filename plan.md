# Function Requirements
1. Admin can create employee(with type)
2. Sales employee can login to crm
3. Admin/sales can create leads with notes features
4. If leads convert to client, create new project/order
5. Order will be asign to projectmanager/operation/other employees by sales/admin
6. admin/projectmanager/operation can create sprint, and task under sprint
7. task will have status if done sprint closed



# Non Function Requirements
1. All time avaiable
2. Role wise access
3. can handle file upload
4. soft delete to avoide data loss


# Database schemas

admins table - id, name, email, password
employee_type - id, title, status, crm_access(0/1), projec_mgmt_access(0/1)
employees table - id, full_name, phone, email, address, govt_id_type, govt_id, zipcode, profile_image, employee_type_id, deleted_at 



