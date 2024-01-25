<?php include 'inc/header.php' ?>  <!--include pour appeler une page dans un sous dossier -->
        <h2>Feedback</h2>
        <p style="font-size: 1.25rem" class="text-center">Leave feedback</p>
        <form action="" style="margin-top: 4rem; width: 75%">
          <div style="margin-bottom: 1.5rem">
            <label for="name" style="font-weight: bold; margin-bottom: 0.5rem"
              >Name</label
            >
            <input
              type="text"
              style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem"
              id="name"
              name="name"
              placeholder="Enter your name"
            />
          </div>
          <div style="margin-bottom: 1.5rem">
            <label for="email" style="font-weight: bold; margin-bottom: 0.5rem"
              >Email</label
            >
            <input
              type="email"
              style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem"
              id="email"
              name="email"
              placeholder="Enter your email"
            />
          </div>
          <div style="margin-bottom: 1.5rem">
            <label for="body" style="font-weight: bold; margin-bottom: 0.5rem"
              >Feedback</label
            >
            <textarea
              style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem"
              id="body"
              name="body"
              placeholder="Enter your feedback"
            ></textarea>
          </div>
          <div style="margin-bottom: 1.5rem">
            <input
              type="submit"
              name="submit"
              value="Send"
              style="
                width: 100%;
                padding: 0.75rem;
                font-size: 1rem;
                background-color: #1e5b97;
                color: #fff;
                border: none;
                cursor: pointer;
              "
            />
          </div>
        </form>
<?php include 'inc/footer.php' ?>
