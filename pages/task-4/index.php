<?php include '../../php/inc/header.php' ; ?>
    <div class="page-header">
        <div class="container">
            <h1>Question 4 </h1>
            <p>Explain how you would make a copy of our production codebase so that you can begin developing a new feature from a project plan and how you would share your work with the world as production software. Please use exact commands for starting your work, preparing for review, and getting it deployed.</p>
        </div>
    </div>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0 bg-light">
        <div class="container pt-0">
            <div id="carouselExampleCaptions" class="carousel slide bg-light" data-keyboard="true" data-interval="false" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="9"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../assets/img/github-logo.png" class="d-block ml-auto" alt="Aint 'ee cute?">
                    <div class="carousel-caption d-none d-md-block text-left text-dark">
                        <h1>Step 1.</h1>
                        <h5>Create a github account if one doesn't already exist.</h5>
                        <ul>
                            <li>Got to https://github.com/join</li>
                            <li>Type your user name, email address, and a password</li>
                            <li>Sign up for GitHub and then follow the instructions</li>
                        </ul>
                        <a class="btn btn-primary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="next">Next Step</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../assets/img/github-logo.png" class="d-block ml-auto" alt="Aint 'ee cute?">
                    <div class="carousel-caption d-none d-md-block text-left text-dark">
                        <h1>Step 2.</h1>
                        <h5>Create a repository</h5>
                        <ul>
                            <li>In the upper-right corner of any page, click , and then click New repository.</li>
                            <li>In the Owner drop-down, select the account you wish to create the repository on.</li>
                            <li>Type a name for your repository, and an optional description.</li>
                            <li>Choose to make the repository either public or private. Public repositories are visible to the public, while private repositories are only accessible to you, and people you share them with.</li>
                            <li>There are a number of optional items you can pre-populate your repository with. If you're importing an existing repository to GitHub Enterprise, don't choose any of these options, as you may introduce a merge conflict. You can choose to add new files using the command line later.</li>
                            <li>When you're finished, click Create repository.</li>
                        </ul>
                        <a class="btn btn-secondary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="prev">Previous Step</a>
                        <a class="btn btn-primary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="next">Next Step</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../assets/img/github-logo.png" class="d-block ml-auto" alt="Aint 'ee cute?">
                    <div class="carousel-caption d-none d-md-block text-left text-dark">
                        <h1>Step 3.</h1>
                        <h5>Install git on your local machine</h5>
                        <h6>Installing on macOS</h6>
                        <p>There are several ways to install Git on a Mac. The easiest is probably to install the Xcode Command Line Tools. On Mavericks (10.9) or above you can do this simply by trying to run git from the Terminal the very first time.</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            $ git --version
                        </div>
                        <h6>Installing on Windows</h6>
                        <p>There are also a few ways to install Git on Windows. The most official build is available for download on the Git website. Just go to https://git-scm.com/download/win and the download will start automatically. For the purposes of this tutorial, we will be using a macOS machine (because it's all I have right now)</p>
                        <a class="btn btn-secondary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="prev">Previous Step</a>
                        <a class="btn btn-primary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="next">Next Step</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../assets/img/github-logo.png" class="d-block ml-auto" alt="Aint 'ee cute?">
                    <div class="carousel-caption d-none d-md-block text-left text-dark">
                        <h1>Step 4.</h1>
                        <h5>Set up git on you local machine</h5>
                        <p>On you local machine navigate to the location of your files.</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            <pre class="text-white mb-0">cd /Users/ronschirmacher/path/to/your/files </pre>
                        </div>
                        <p>Once in the directory that you want to share:</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            <pre class="text-white mb-0">git init
git remote add origin git@github.com:RoschWeb/thumbstopper.git</pre>
                        </div>
                        <p>Now that you've added a remote repo to your local machine, you'll want to verify that git can see your files as "untracked".</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            <pre class="text-white mb-0">git status</pre>
                        </div>
                        <p>You will most likely notice some files that you do not want to add such as .DS_Store and perhaps .idea/.  These will need to be added to your .gitignore file which you can edit with nano, vi, or any sort of text editor.</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            <pre class="text-white mb-0">nano .gitignore</pre>
                        </div>
                        <p>Once the file has been created/opened, add the following:</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            <pre class="text-white mb-0">DS_STORE
.idea/</pre>
                        </div>
                        <p>Save the file and check your status</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            <pre class="text-white mb-0">git status</pre>
                        </div>
                        <div class="card bg-dark p-1 text-danger mb-3">
                            <pre class="text-danger mb-0">.gitignore
assets/
index.php
pages/
php/</pre>
                        </div>
                        <a class="btn btn-secondary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="prev">Previous Step</a>
                        <a class="btn btn-primary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="next">Next Step</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../../assets/img/github-logo.png" class="d-block ml-auto" alt="Aint 'ee cute?">
                    <div class="carousel-caption d-none d-md-block text-left text-dark">
                        <h1>Step 5.</h1>
                        <h5>Upload your files to your github repository</h5>
                        <p>Now that your files are ready to be uploaded, you'll want to "push" them to your repository.  However, you need to tell git what files you want add.  In this case, we want to add all files with the exception of the files listed in our .gitignore file.</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            $ git add .
                        </div>
                        <p>Now that your files have been added, we need to "commit" them and typically you want to add a message for the commit explaining briefly what this particular commit is about.</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            $ git commit -m "Initial commit"
                        </div>
                        <p>Once your commit has been established, we can now push them to our remote repository using the branch we're currently checked out to.  In this case, our branch is 'master'</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            $ git push origin master
                        </div>
                        <div class="alert alert-warning" role="alert">
                            If you have created your repository with a README file, you'll get an error on your git push.  You'll first need to pull that README into your local branch.  i.e. git pull --allow-unrelated-histories origin master
                        </div>
                        <a class="btn btn-secondary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="prev">Previous Step</a>
                        <a class="btn btn-primary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="next">Next Step</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../../assets/img/github-logo.png" class="d-block ml-auto" alt="Aint 'ee cute?">
                    <div class="carousel-caption d-none d-md-block text-left text-dark">
                        <h1>Step 6.</h1>
                        <h5>Fork the repository</h5>
                        <p>Normally, you'll notice github letting you know that there is a difference between branch across 'forks'.  If this is not your repository, you will need to 'fork' the repository, clone to your local machine, make changes, push your changes to github.</p>
                        <p>To fork the repository, simply click "Fork" in the upper right corner of github and follow the instructions provided by github.</p>
                        <p>On your local machine, navigate to a place where you would like to store the files from the github repository and do the following. (assuming you have git installed)</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            $ git clone git@github.com:RoschWeb/thumbstopper.git
                        </div>
                        <p>This will download the files from github to your local machine.</p>

                        <a class="btn btn-secondary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="prev">Previous Step</a>
                        <a class="btn btn-primary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="next">Next Step</a>
                    </div>
                </div>


                <div class="carousel-item">
                    <img src="../../assets/img/github-logo.png" class="d-block ml-auto" alt="Aint 'ee cute?">
                    <div class="carousel-caption d-none d-md-block text-left text-dark">
                        <h1>Step 7.</h1>
                        <h5>Create a "Pull Request"</h5>
                        <p>Creating a pull request will allow the owner (or whoever has privileges to your repository) to "review" your code. To create a pull request, simply log onto github, navigate to the repository you wish to create a pull request for.</p>

                        <h5>Create a new branch for a new feature</h5>
                        <p>On your local machine, create a new branch given that your master branch is in sync with your remote branch.</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            $ git checkout -b newfeature
                        </div>
                        <p>This will create a new branch called newfeature. On this branch, any changes you make will show as an untracked file once you make an edit and save.  Once your code is ready for deployment, we need to first add the file(s), then commit the file(s), then push the file(s) for review.</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            <pre class="text-white mb-0">$ git status
$ git add .
$ git commit -m "New feature"
$ git push origin newfeature</pre>
                        </div>
                        <p>OR</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            <pre class="text-white mb-0">$ git status
$ git add /path/to/changed/file
$ git commit -m "New feature"
$ git push origin newfeature</pre>
                        </div>

                        <a class="btn btn-secondary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="prev">Previous Step</a>
                        <a class="btn btn-primary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="next">Next Step</a>
                    </div>
                </div>



                <div class="carousel-item">
                    <img src="../../assets/img/github-logo.png" class="d-block ml-auto" alt="Aint 'ee cute?">
                    <div class="carousel-caption d-none d-md-block text-left text-dark">
                        <h1>Step 8.</h1>
                        <h5>Submit a "Pull Request"</h5>
                        <p>If github is not showing there is a change as in a pull request to be made, that's ok.  We can still create a pull request by clicking the "New pull request" button in github.</p>
                        <p>If you do not see your base branch, you can click the "compare across forks" link and then choose which repository and branch you would like to compare and merge.</p>
                        <p>You'll notice github will show you the differences between what is on the branch your wanting to merge to and what your are actually trying to merge.</p>
                        <p>If everything checks out, click the "Create pull request" button.</p>
                        <p>Once you have submitted your pull request, given there were no merge conflicts, your code is now ready to be reviewed.</p>
                        <a class="btn btn-secondary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="prev">Previous Step</a>
                        <a class="btn btn-primary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="next">Next Step</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../../assets/img/github-logo.png" class="d-block ml-auto" alt="Aint 'ee cute?">
                    <div class="carousel-caption d-none d-md-block text-left text-dark">
                        <h1>Step 9.</h1>
                        <h5>Merge the new Feature</h5>
                        <p>Assuming the new feature code has passed a review, it is now ready to be merged.</p>
                        <p>Using the github interface, you can now click the "Merge pull request" button.</p>
                        <p>This will merge any new code approved by the reviewer.</p>
                        <p>This does not mean the new code has been deployed however.</p>
                        <p>At this point, you will have to pull the new code into your production branch located on your production server for example.</p>
                        <div class="card bg-dark p-1 text-white mb-3">
                            <pre class="text-white mb-0">$ git pull</pre>
                        </div>
                        <a class="btn btn-secondary btn-lg"" href="#carouselExampleCaptions" role="button" data-slide="prev">Previous Step</a>
                    </div>
                </div>


                <!-- end of items  -->
            </div>
        </div>

        </div>
    </main>

<?php include '../../php/inc/footer.php' ; ?>