 /*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */

import java.io.IOException;
import java.io.PrintWriter;
import jakarta.servlet.ServletException;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;


/**
 *
 * @author AFRIN
 */
public class SuggestionsServlet extends HttpServlet {
      // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    
    String[] studentNames = {
        "ABIRAMI PL",
        "AFRIN FATHIMA I",
        "AGILA SHREE A",
        "AISHWARYA C",
        "AJITHA B",
        "AMRUTHA B J",
        "ARTHEY C",
        "ASHMITA R",
        "BLESSY ABIDHA B S",
        "CAROLINE SUJA J S",
        "DHANASREE L P",
        "LOKI",
        "SIDDHU",
        "HARSHATH",
        "TONY",
        "STEVE",
        "PETER",
        "NATASHA",
        "CAROL",
        "ILANA",
        "ZISHAN",
        "ZAINU"
    };

    
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        PrintWriter out= response.getWriter();
        String name=request.getParameter("name"); 
        if(!"".equals(name)){
            for( String i: studentNames){
                if(i.toLowerCase().startsWith(name.toLowerCase())){
                    out.println(i+"<br>");
                }
            }
        }
        
    }
}
