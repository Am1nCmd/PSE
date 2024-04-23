<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">PSE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./">Home</a>
                </li>

                <?php
                    if ($type_user == 'Admin') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="data_perusahaan">Data Perusahaan</a>
                        </li>
                    <?php } else { ?>
                        
                    <?php }
                    
                ?>

                <?php 
                    if ($fullname == NULL) { ?>
                        
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="form_pendaftaran">Form Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout">Logout</a>
                        </li>
                    <?php }

                ?>
                
            </ul>
        </div>
    </div>
</nav>