/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */

import java.io.*;
import java.sql.*;
import jakarta.servlet.*;
import jakarta.servlet.http.*;


/**
 *
 * @author AFRIN
 */
public class StudentsDetailservlet extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        PrintWriter out= response.getWriter();

        try{
            int regno= Integer.parseInt(request.getParameter("regno"));

            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection conn= DriverManager.getConnection("jdbc:mysql://localhost:3306/student","root","afrinshah");
            PreparedStatement stmt= conn.prepareStatement("Select*from students where Rollno=?");
            stmt.setInt(1, regno);
            ResultSet rs= stmt.executeQuery();
            if(rs.next()){
                String name=rs.getString("name");
                int m1= rs.getInt("m1");
                int m2= rs.getInt("m2");
                int m3= rs.getInt("m3");
                out.println("<p><strong>Name:</strong> " + name + "</p>");
                out.println("<p><strong>Mark 1: </strong> " + m1 + "</p>");
                out.println("<p><strong>Mark 2: </strong> " + m2 + "</p>");  
                out.println("<p><strong>Mark 3: </strong> " + m3 + "</p>");        
                
            }
        }
        catch(Exception e){
            out.println(e);
        }
    }
}
