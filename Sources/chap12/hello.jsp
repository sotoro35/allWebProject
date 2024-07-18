<html>
<head>
<title>Hello World</title>
</head>
<body>
안녕하세요? 현재 시각은
<%
java.util.Date date = new java.util.Date();
out.println(date);
%>
입니다.
</body>
</html>