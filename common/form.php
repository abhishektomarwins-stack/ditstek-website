<section class="contact-form-section">
    <div class="container contact-form-container p-0">
        <div class="row m-0">
            <div class="col-lg-5 col-md-12 contact-info-panel">
            <h2>Tell us how we can help you?</h2>
            <p>Write to us</p>

            <div class="contact-details">
                <div class="detail-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                    </div>
                    <span>+1 (587) 500-4784 | +1 (651) 780-7578</span>
                </div>
                <div class="detail-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <span>info@ditstek.com</span>
                </div>
                <div class="detail-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <span>D-140, Phase 7, Industrial Area, Sector 73,<br>Sahibzada Ajit Singh Nagar, Punjab
                        160055</span>
                </div>
            </div>
            <div class="bg-circles-img-container">
                <img src="<?php echo $url; ?>assets/images/ai-agent/contact-circle.webp" alt="Contact Circle" title="Contact Circle" />
            </div>
        </div>
            <div class="col-lg-7 col-md-12 contact-form-panel">
            <form action="#" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Id</label>
                        <input type="email" id="email" name="email">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="country">Select Country</label>
                        <select id="country" name="country">
                            <option value="">Select Country</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">Select State</label>
                        <select id="state" name="state">
                            <option value="">Select State</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone No.</label>
                        <input type="tel" id="phone" name="phone" value="+(91)">
                    </div>
                </div>

                <div class="form-group radio-group-container">
                    <label>How did you come across us?</label>
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="source" value="website" checked> Website
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="source" value="portals"> Portals
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="source" value="internet"> Internet
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="source" value="reference"> Reference
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="source" value="others"> Others
                        </label>
                    </div>
                </div>

                <div class="form-group message-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Write your message.." rows="1"></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn hero-btn">Send Message</button>
                </div>
            </form>
        </div>
            </div>
        </div>
</section>