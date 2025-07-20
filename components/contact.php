<?php
require_once 'components/buttons.php';

function renderContact() {
    $submitButton = renderButton('Send Message', 'primary', '#', '📤', ['type' => 'submit']);
    
    return <<<HTML
    <section class="section" id="contact" style="background: linear-gradient(135deg, var(--dark-color) 0%, #374151 100%); color: var(--white);">
        <div class="container">
            <div class="text-center mb-4">
                <h2 style="color: var(--white);">Let's Work Together</h2>
                <p style="color: #d1d5db;">Ready to start your next project? Get in touch and let's create something amazing together.</p>
            </div>
            
            <div class="grid grid-2" style="gap: var(--space-3xl); align-items: start;">
                <div>
                    <h3 style="color: var(--white); margin-bottom: var(--space-lg);">Get In Touch</h3>
                    
                    <div class="contact-info" style="margin-bottom: var(--space-xl);">
                        <div class="contact-item" style="margin-bottom: var(--space-md); display: flex; align-items: center; gap: var(--space-sm);">
                            <span style="font-size: 1.5rem;">📧</span>
                            <div>
                                <strong style="color: var(--white);">Email</strong>
                                <p style="color: #d1d5db; margin: 0;">" . SITE_EMAIL . "</p>
                            </div>
                        </div>
                        
                        <div class="contact-item" style="margin-bottom: var(--space-md); display: flex; align-items: center; gap: var(--space-sm);">
                            <span style="font-size: 1.5rem;">📞</span>
                            <div>
                                <strong style="color: var(--white);">Phone</strong>
                                <p style="color: #d1d5db; margin: 0;">" . SITE_PHONE . "</p>
                            </div>
                        </div>
                        
                        <div class="contact-item" style="display: flex; align-items: center; gap: var(--space-sm);">
                            <span style="font-size: 1.5rem;">⏰</span>
                            <div>
                                <strong style="color: var(--white);">Response Time</strong>
                                <p style="color: #d1d5db; margin: 0;">Within 24 hours</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form action="#" method="POST" style="display: grid; gap: var(--space-md);">
                        <div style="display: grid; gap: var(--space-md); grid-template-columns: 1fr 1fr;">
                            <input type="text" name="name" placeholder="Your Name" required 
                                   style="padding: var(--space-md); border: 1px solid #4b5563; border-radius: var(--radius-md); background: rgba(255,255,255,0.1); color: var(--white); font-family: var(--font-primary);">
                            <input type="email" name="email" placeholder="Your Email" required 
                                   style="padding: var(--space-md); border: 1px solid #4b5563; border-radius: var(--radius-md); background: rgba(255,255,255,0.1); color: var(--white); font-family: var(--font-primary);">
                        </div>
                        
                        <input type="text" name="subject" placeholder="Subject" required 
                               style="padding: var(--space-md); border: 1px solid #4b5563; border-radius: var(--radius-md); background: rgba(255,255,255,0.1); color: var(--white); font-family: var(--font-primary);">
                        
                        <textarea name="message" placeholder="Your Message" rows="5" required 
                                  style="padding: var(--space-md); border: 1px solid #4b5563; border-radius: var(--radius-md); background: rgba(255,255,255,0.1); color: var(--white); font-family: var(--font-primary); resize: vertical;"></textarea>
                        
                        {$submitButton}
                    </form>
                </div>
            </div>
        </div>
    </section>
HTML;
}
?>