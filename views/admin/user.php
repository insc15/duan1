<section style="both:clear;">
    <form method="post" >
        <div class="overflow-x-auto relative shadow-md rounded-md flex justify-center py-9 ml-5">
            <table
                class="max-w-screen-xl mx-auto  shadow-default rounded-lg p-4 w-full md:w-10/12 text-gray-500 dark:text-gray-400 ">
                <thead>
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            ID
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Username
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Avatar
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Password
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (getALl_user() as $key => $value) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $value['id']; ?>
                        </th>
                        <th scope="row">
                            <?php echo $value['username']; ?>
                        </th>
                        <th scope="row">
                            <img src="<?php echo $value['profile_image']; ?>" alt="#" width="100px">
                        </th>
                        <th class="py-4 px-6">
                            <input type="password" value="<?php echo $value['password']; ?>" class="text-center">
                        </th>
                        <th class="py-4 px-6">
                            <?php echo $value['email']; ?>
                        </th>
                        <th class="py-4 px-6">
                            <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                            <a href="javascript:confirmDelete('<?php echo get_home_url() ?>/admin/user?id=<?php echo $value['id']; ?>')"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><button type="submit">Delete</button></a>
                        </th>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </form>
</section>