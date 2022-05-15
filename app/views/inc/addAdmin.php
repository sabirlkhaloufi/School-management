<div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">add student</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <form class="p-3" id="formAdd" method="POST" action="<?php echo URLROOT ?>/adminController/register">
                              <p class="vide-msg alert-danger text-center "></p>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="name">
                                    <label for="Matricule" class="form-label">Matricule</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Matricule" type="text" class="form-control" id="Matricule" aria-describedby="emailHelp" name="matricule">
                                  </div>
                                  <div class="phone">
                                    <label for="Nom" class="form-label">Nom</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Nom" type="text" class="form-control" id="Nom" aria-describedby="emailHelp" name="nom">
                                  </div>
                                </div>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="Prénom">
                                    <label for="Prenom" class="form-label">Prenom</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Prénom" type="text" class="form-control" id="Prenom" aria-describedby="emailHelp" name="prenom">
                                  </div>
                                  <div class="phone">
                                    <label for="Role" class="form-label">Role</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Role" type="text" class="form-control" id="Role" aria-describedby="emailHelp" name="role">
                                  </div>
                                </div>
                                <div class="mb-4 d-flex gap-4">
                                  <div class="name">
                                    <label for="password" class="form-label">Mot de Passe</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="password" class="form-control" id="name" aria-describedby="emailHelp" name="password">
                                  </div>
                                  <div class="phone">
                                    <label for="cpassword" class="form-label"> confirmer Mot de Passe</label> <span class="valid text-danger"></span>
                                    <input placeholder="Enter Mot de Passe" type="password" class="form-control" id="cpassword" aria-describedby="emailHelp" name="cpassword">
                                  </div>
                                </div>
                                <div class="button">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="submitContact" class="btn btn-primary">add</button>
                                </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>