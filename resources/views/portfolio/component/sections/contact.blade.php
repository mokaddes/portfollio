
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-header">
                    <h2 class="section-heading text-uppercase">Need a developer?</h2>
                </div>
            </div>
        </div>

        <div class="">
        <form action="{{ route('contact') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" required class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea required class="form-control" id="message" name="message" rows="4" placeholder="Your message"></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
    </div>
