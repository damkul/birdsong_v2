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
        <div class="projects-container">
            <?php if (count($data)>1): ?> 
                
                     <?php foreach ($data['ongoingProjects'] as $key): ?> 
                        <div class="prj">
                            <div class="img-cntr">
                                <img src="<?php echo ROOT ?>/images/<?php echo $key->imageName ?>" alt="">
                            </div>
                            <div class="info-cntr">
                                <h3><?php echo $key->title ?></h3>
                        
                                <p class="prj-desc"><?php echo $key->description ?></p>
                                <span><a href="<?php echo $key->eBirdLink ?>" class="ebird-link" target="_blank"><?php echo $key->eBirdLink ?> </a></span>
                               
                            </div>
                            <?php $role=1; if($role>0): ?>
                                <div class="bottom">
                                    <button class="btn"><a href="/projects/editProject/<?php $key->projectId ?> ">Edit</a></button>
                                    <button class="btn"><a href="/projects/deleteProject/<?php $key->projectId ?>">Delete</a></button>
                                </div>
                            <?php endif; ?>
                        </div>
                     <?php endforeach;   ?> 
            <?php endif;   ?> 
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
                <?php if (count($data['ongoingProjects'])>0): ?>
                 
                 <?php foreach($data['ongoingProjects'] as $key): ?>

                     <tr>
                         <td>1</td>
                         <td><?php echo $key->title ?></td>
                         <td><?php echo $key->title ?></td>
                         <td><?php echo $key->toDate ?></td>
                       </tr>
                  
                 <?php endforeach; ?>

             <?php endif ?>
              </table>
        </div>
    </div>

    </div>
</section>
<section>
    
</section>