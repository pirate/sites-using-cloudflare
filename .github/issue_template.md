**Please, do not create duplicate issues**

### DISCLAIMER:
This list contains *all* domains that use CloudFlare DNS, not just the CloudFlare SSL proxy (the affected service that leaked data).
It's a broad sweeping list that includes everything.  Just because a domain is on the list does not mean the site is compromised.
This list will be narrowed down to the affected domains as we get more information.


### HOW TO REMOVE YOUR SITE
1. Verify the site is static and contains no user or sensitive data (I will remove it immediately once I confirm)  

OR  

1. Verify ownership, send me an email from @yourdomain.com, post a random nonce on the domain, or provide keybase proof
2. Verify you did not use the Cloudflare proxy service during the affected period 

(this is obviously not proof that you weren't affected, but this serves as a paper trail for accountability reasons, in case
someone wants to dispute that you were affected, we have an employee/owner of the domain who can be held accountable)

I will not remove sites that contain user data and are returning `server:cloudflare-nginx` in response headers, since they may have been affected.
You're welcome to submit a PR to include a link to a blog post for your users, e.g.:

- example.com \[no evidence of data leaked](https://example.com/blog/cloudflare-data-leak)
