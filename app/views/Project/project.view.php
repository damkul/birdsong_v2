<section class="banner project-banner">
    <div class="banner-heading"><h1 class="main-heading">Projects</h1>
    <p class="sub-heading">The richness we achieve comes from Nature, the source of our inspiration. Never, no, never did nature say one thing and wisdom another.</p></div>
</section>
<section id="project">
    <div class="container">
        <div class="page-heading-container">
            <h2 class="page-heading">All Projects</h2>
            <hr class="ruler">
        </div>
        <% if (role>=0) { %>
            <div class="new-project-container">
                <button><a href="/projects/newProject">New Project</a></button>
            </div>
        <% } %>
        
        <div><%= error %> <%= success %></div>
        <div class="projects-container">
            <% if(onGoingProjects.length > 0) { %> 

                    <% onGoingProjects.forEach(project => { %>
                        <% 
                        if (project.imageName=='NULL') {
                            project.imageName = 'logo_0.5.png';
                        } 
                        %>   
                        <div class="prj">
                            <div class="img-cntr">
                                <img src="<?php echo ROOT ?>/images/<%= project.imageName %>" alt="">
                            </div>
                            <div class="info-cntr">
                                <h3><%= project.title %></h3>
                                <% if ( project.description != 'NULL') { %>

                                    <% var desc = project.description.substring(0,100); %> 

                                <% } %>
                                <p class="prj-desc"><%= desc %></p>
                                <span><a href="<%= project.eBirdLink %>" class="ebird-link" target="_blank"><%= project.eBirdLink %> </a></span>
                               
                            </div>
                            <% if (role>0) { %>
                                <div class="bottom">
                                    <button class="btn"><a href="/projects/editProject/<%= project.projectId %> ">Edit</a></button>
                                    <button class="btn"><a href="/projects/deleteProject/<%= project.projectId %>">Delete</a></button>
                                </div>
                            <% } %>
                            
                        </div>
                     
                    <% }) %>

            <% } %> 
        </div>

        <div class="page-heading-container">
            <h2 class="page-heading">Prviously Done Projects</h2>
            <hr class="ruler">
        </div>
        <div class="members-table-container">
            
            <table class="members">
                <tr>
                  <th>Sr. No.</th>
                  <th>Project Name</th>
                  <th>Organisation</th>
                  <th>Duration</th>
                </tr>
                <% if (previousProjects.length>0) { %>
                 
                    <% previousProjects.forEach(element => { %>

                        <tr>
                            <td>1</td>
                            <td><%= element.title%></td>
                            <td><%= element.title%></td>
                            <td><%= element.toDate%></td>
                          </tr>
                     
                    <% }) %>

                <% } %>
              </table>
        </div>
    </div>

    </div>
</section>
<section>
    
</section>