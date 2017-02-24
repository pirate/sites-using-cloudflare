**Please, do not create duplicate issues**

### DISCLAIMER:
This list contains *all* domains that use cloudflare DNS, not just the cloudflare SSL proxy (the affected service that leaked data).
It's a broad sweeping list that includes everything.  Just because a domain is on the list does not mean the site is compromised.
This list will be narrowed down to the affected domains as I get more information.


### HOW TO REMOVE YOUR SITE
1. verify the site is static and contains no user data (I will remove it immediately once I confirm)
OR
1. Verify ownership, send me an email from @yourdomain.com, post a random nonce on the domain, or provide keybase proof
2. Verify you are not using the Cloudflare TLS proxy

I will not remove sites that contain user data and are returning `server:cloudflare-nginx` in response headers, since they may have been affected.
