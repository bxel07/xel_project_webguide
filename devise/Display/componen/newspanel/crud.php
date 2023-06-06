<div class="container">
    <div id="content-home" class="content" style="display: none;">

    <h1>Home Content</h1>
        <p>This is the content for the Home link.</p>
    </div>


    <div id="content-news" class="content" style="display: none;">
        <h1 class="text-center">Crud News</h1>
        <form action="/news/create" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            <input class="btn btn-success" type="submit" value="submit">
        </form>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($model as $key => $contact) : ?>
        <tr>
            <td><?= ++$key ?></td>
            <td><?= $contact['title'] ?></td>
            <td><?= $contact['content'] ?></td>
            <td>
                <input type="submit" class="btn btn-success" value="Edit"/> 
                <input type="submit" class="btn btn-danger" value="Delete"/>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
        </table>
    </div>

    <div id="content-guide" class="content" style="display: none;">
        <h1>Guide Content</h1>
        <p>This is the content for the Guide link
    </div>

    <div id="content-guide" class="content" style="display: none;">
        <h1>Guide Content</h1>
        <p>This is the content for the Guide link.</p>
    </div>

    <div id="content-logout" class="content"  style="display: none;">
        <h1>Logout Content</h1>
        <p>This is the content for the Logout link.</p>
    </div>
</div>

