## Overview

Laravel app for Tech Article posting styled with Tailwind CSS. It integrates with the NewsData.io API to display tech news and uses Firebase Authentication for user login and registration. Automated news updates are handled by an Artisan command and a cron job. CI/CD is set up with GitHub Actions for linting and deployment. Developed during my internship.

## Technologies

- Laravel
- Tailwind CSS
- Firebase Authentication
- NewsData.io API
- Artisan commands
- Bash + cron (automated updates)
- GitHub Actions (CI/CD)

## Deployment

- CI/CD pipeline runs linting and deployment steps via GitHub Actions.
- Cron jobs trigger automated news updates through Artisan commands.

## Notes

- API keys for NewsData.io must be configured in the environment file.  
- Firebase Authentication requires proper setup of Firebase project credentials.
