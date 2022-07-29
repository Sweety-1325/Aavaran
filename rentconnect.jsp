<%@ page import="java.sql.*"%>
<%@ page import="javax.sql.*"%>
<%@page import="java.sql.Connection"%>
<%
String Nmae=request.getParameter("Name");
String Number=request.getParameter("Number");
String Email=request.getParameter("Email");
String house=request.getParameter("house");
int bhk=request.getParameter("bhk");
String code=request.getParameter("code");









try{
	Class.forName("com.mysql.jdbc.Driver");
	Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/aavaran","Madhumita","Madhu@1325");
	PreparedStatement ps = conn.prepareStatement("insert into rent(Name,Number,Email,house,bhk,code) values(?,?,?,?,?,?)");
	ps.setString(1,Name);	
	ps.setString(2,Number);
	ps.setString(3,Email);
	ps.setString(4,house);
	ps.setInt(5,Integer.parseInt(bhk));
	ps.setString(6,code);
	int x=ps.executeUpdate();
	if(x>0){
		out.println("Details Received");
	}
		
}catch(Exception e)
{
   out.println(e);
}
%>
<a href="index.html">Home</a>

