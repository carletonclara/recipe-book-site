<?php
    function createRecipeTemplate(){
        return '
            <div class="card bg-light m-2">
                <div class="card-body">
                    <form action="create_recipe.php" method="POST">
                        <div class="form-row mb-2">
                            <div class="col-6">
                                <label for="exampleFormControlTextarea1">Recipe Name</label>
                                <input type="text" class="form-control" name="recipe_name" placeholder="Recipe Name">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Recipe Photo</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-6">
                                <label for="exampleFormControlTextarea1">Author</label>
                                <input type="text" class="form-control" name="author" placeholder="Author">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                                <label for="exampleFormControlTextarea1">Recipe Book</label>
                                <select class="form-control">
                                    <option>Default select</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Ingredients</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="ingredients" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Instructions</label>
                                    <ul id="tasksUL">
                                    <li>test</li>
                                    </ul>
                                    <input class="form-control" type="text" name="instructions" value="" spellcheck="false" placeholder="New Task" id="newtask">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        ';
    }
?>