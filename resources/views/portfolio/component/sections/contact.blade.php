<div class="container contact-container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="section-header text-center mb-5">
                <h2 class="section-heading text-uppercase">Need a Developer?</h2>
                <p class="text-muted">Let us know how we can help you. Send us a message!</p>
            </div>

            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body p-5">
                    <form action="{{ route('contact') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="font-weight-bold">Name</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group mt-4">
                            <label for="email" class="font-weight-bold">Email Address</label>
                            <input type="email" required class="form-control form-control-lg rounded-pill" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group mt-4">
                            <label for="message" class="font-weight-bold">Message</label>
                            <textarea required class="form-control rounded-lg" id="message" name="message" rows="5" placeholder="Your message"></textarea>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
