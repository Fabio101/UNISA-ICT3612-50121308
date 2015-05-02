<?php
/**
* Author : Fabio Pinto
* Description as per requiremnets :

*Describe the database structure in a narrative way (i.e. as if you are explaining what you see to a person
*over the telephone), and by referring to the tables, the primary/foreign keys, and relationships present.

**/

echo '<p>There are a total of six database tables that make up this database. Each table serves a specific purpose and is often times related to other tables. The six tables are: 
	<ul>
		<li>Orders</li>
		<li>Order Details</li>
		<li>Products</li>
		<li>Employees</li>
		<li>Customers</li>
		<li>Shippers</li>
	</ul></br>

The largest and most related table is <strong>Orders</strong> which contains an <strong>OrderID</strong> which acts as the tables primary key which uniquely identifies each row in the Orders table.</br>

There are several tables that relate to the Orders table. In Orders, there are several foreign keys which link Orders to other tables that it is related to. The foreign keys are:
	<ul>
		<li>CustomerID</li>
		<li>EmployeeID</li>
		<li>OrderID</li>
		<li>ShipVia</li>
	</ul></br>

CustomerID is a foreign key in Orders which links to <strong>CustomerID</strong> in <strong>Customers</strong> which is Customers Primary key which uniquely identifies all rows in Customers. Orders has a <strong>Many to One</strong> relationship with Customers as a many orders can belong to one customer. In the same way, Customers has a <strong>One to Many</strong> relationship with Orders as one Customer can have many orders.</br></br>

EmployeeID is a foreign key in Orders which links to <strong>EmployeeID</strong> in <strong>Employees</strong> which is Employees Primary key which also uniquely identifies all rows in Employees. Orders has a <strong>Many to One</strong> relationship with Employees as many orders can belong to one employee. Vice Versa with Employees having a <strong>One to Many</strong> relationship with Orders as one employee can have many orders.</br></br>

OrderID also acts as a foreign in Orders linking to <strong>Order Details</strong> and shares the same Primary key. Order Details is a <strong>linking</strong> table between Orders and <strong>Products</strong>. Orders has a <strong>One to Many</strong> relationship with Order Details as each order can have many Order details, Likwise, Order Details has a <strong>Many to One</strong> relationship with Orders as Many Order details can belong to one order.</br></br>

ShipVia in Orders is a foreign key linked to the <strong>Shippers</strong> table ShipperID column which acts as the primary key for Shippers and is able to uniquely identify each row in the Shippers table. Orders has a <strong>Many to One</strong> relationship with Shippers as many orders can be shipped by a single shipper. Likewise, the relationship from Shippers to Orders is <strong>One to Many</strong> as one shipper can handle many orders.</br></br> 

Lastly there is the <strong>Products</strong> table which does not relate directly to Orders as all other tables do, but relates directly to <strong>Order Details</strong>. The <strong>ProductID</strong> is the primary key which is able to unquely identify all rows in the table and is linked via the foreign key in Product Details also called <strong>ProductID</strong>. The relation from Products to Order Details is a <strong>One to Many</strong> relationship which allows one product to be in many order details and vice versa with a <strong>Many to One</strong> relationship from Order Details to Products as many order details can belong to one product.

';

?>
