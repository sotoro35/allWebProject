<!DOCTYPE html>
<html>
<body>
<%!
int square(int n) {
return n*n;
}
%>
<%= new String("Hello World").toUpperCase() %>
<br>
<%
for(int i=0; i<10; i++)
out.println(i);
%>
<br>
<%=square(9) %>
</body>
</html>
