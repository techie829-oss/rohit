<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Generate20BlogsSeeder extends Seeder
{
    public function run()
    {
        $categories = ['Web Development', 'DevOps', 'Mobile App Development', 'Cloud Computing', 'AI & Machine Learning'];
        $author = 'Rohit Kumar';
        
        $blogs = [
            [
                'title' => 'Mastering Laravel 11: What\'s New?',
                'summary' => 'A comprehensive guide to the latest features and improvements in Laravel 11, including the streamlined directory structure and enhanced routing.',
                'content' => 'Laravel 11 introduces a more minimalistic application skeleton, removing many default directories to keep the project clean. It also features a new `bootstrap/app.php` file for easier configuration of routing and middleware. In this post, we explore how to migrate your existing projects and leverage the new caching and queue capabilities...',
            ],
            [
                'title' => 'Building Scalable APIs with Node.js & Express',
                'summary' => 'Learn how to architect high-performance, scalable RESTful APIs using Node.js, Express, and MongoDB.',
                'content' => 'When building enterprise applications, scalability is key. This article covers best practices for setting up Express.js applications using MVC architecture, rate limiting for security, and MongoDB indexing strategies to ensure your API can handle thousands of concurrent requests...',
            ],
            [
                'title' => 'The Ultimate Guide to CI/CD with GitHub Actions',
                'summary' => 'Automate your deployment pipeline and reduce manual errors with a robust CI/CD workflow using GitHub Actions.',
                'content' => 'Continuous Integration and Continuous Deployment (CI/CD) is crucial for modern software development. By using GitHub Actions, you can automatically run tests, build Docker images, and deploy to AWS or DigitalOcean on every push. Let’s build a YAML configuration from scratch...',
            ],
            [
                'title' => 'React vs Vue: Which one to choose in 2026?',
                'summary' => 'An in-depth comparison of React and Vue.js focusing on performance, ecosystem, and developer experience.',
                'content' => 'Both React and Vue have dominated the frontend landscape for years. While React offers a massive ecosystem and corporate backing from Meta, Vue provides a gentler learning curve and a more opinionated, integrated core. Here’s a breakdown of when to choose which framework for your next project...',
            ],
            [
                'title' => 'Getting Started with Docker & Containerization',
                'summary' => 'Demystifying Docker containers, images, and docker-compose for local development and production environments.',
                'content' => 'Containerization has revolutionized how we ship software. Docker allows developers to package an application with all its dependencies into a standardized unit for software development. This guide explains Dockerfiles, volumes, networks, and how to write a docker-compose.yml file for a LAMP stack...',
            ],
            [
                'title' => 'Top 10 VS Code Extensions for Web Developers',
                'summary' => 'Boost your productivity with these must-have Visual Studio Code extensions tailored for full-stack developers.',
                'content' => 'Visual Studio Code is the editor of choice for many developers. Out of the box, it’s great, but with the right extensions, it becomes a powerhouse. From Prettier for code formatting to GitLens for source control, here are the top 10 extensions you need to install today...',
            ],
            [
                'title' => 'Understanding OAuth 2.0 and OpenID Connect',
                'summary' => 'A beginner-friendly explanation of how modern authentication and authorization protocols work under the hood.',
                'content' => 'Implementing secure authentication can be daunting. OAuth 2.0 is the industry-standard protocol for authorization, while OpenID Connect adds an identity layer on top. This post breaks down the authorization code flow, JWTs, and how to integrate ' . "Sign in with Google" . ' into your web app...',
            ],
            [
                'title' => 'Optimizing Database Queries in MySQL',
                'summary' => 'Techniques for profiling and optimizing slow MySQL queries to dramatically improve application response times.',
                'content' => 'Slow database queries are often the bottleneck in web applications. By understanding the EXPLAIN statement, adding appropriate composite indexes, and avoiding N+1 query problems in ORMs like Eloquent or Prisma, you can speed up your application significantly. Let\'s dive into query optimization...',
            ],
            [
                'title' => 'Introduction to Tailwind CSS',
                'summary' => 'Why utility-first CSS is changing the way we style the web, and how to get started with Tailwind CSS.',
                'content' => 'Traditional CSS often leads to bloated stylesheets and naming conflicts. Tailwind CSS solves this by providing low-level utility classes that let you build completely custom designs without ever leaving your HTML. Here is a guide on setting up Tailwind in a modern build pipeline...',
            ],
            [
                'title' => 'Serverless Computing: Pros, Cons, and Use Cases',
                'summary' => 'Exploring the serverless architecture model, AWS Lambda, and whether it’s the right fit for your next project.',
                'content' => 'Serverless computing allows you to build and run applications without thinking about servers. AWS Lambda and Vercel Functions offer auto-scaling and pay-per-use pricing. However, cold starts and vendor lock-in are real concerns. Let\'s evaluate when to go serverless vs traditional VPS hosting...',
            ],
            [
                'title' => 'Web Accessibility (a11y) Best Practices',
                'summary' => 'How to make your websites usable for everyone, including people with disabilities.',
                'content' => 'Accessibility should not be an afterthought. Using semantic HTML, ARIA attributes, proper color contrast, and keyboard navigation ensures that your site is usable by visually and physically impaired users. Let’s review the WCAG guidelines and how to implement them...',
            ],
            [
                'title' => 'State Management in React: Redux vs Zustand',
                'summary' => 'A comparison of modern state management libraries in the React ecosystem.',
                'content' => 'Redux has been the go-to state manager for React for years, but its boilerplate can be overwhelming. Zustand offers a much simpler, hook-based API without sacrificing performance. This article compares the two and shows how to implement a shopping cart state in both...',
            ],
            [
                'title' => 'Building Mobile Apps with Flutter',
                'summary' => 'Why Flutter is an excellent choice for cross-platform mobile development.',
                'content' => 'Flutter allows you to build natively compiled applications for mobile, web, and desktop from a single codebase. Powered by Dart, its declarative UI and hot reload feature make development incredibly fast. Here is a step-by-step tutorial on building your first Flutter app...',
            ],
            [
                'title' => 'The Future of AI in Software Engineering',
                'summary' => 'How Large Language Models and AI coding assistants are transforming the daily life of a developer.',
                'content' => 'From GitHub Copilot to ChatGPT, AI tools are automating boilerplate code, writing tests, and assisting in debugging. But will AI replace software engineers? The consensus is that AI will augment, not replace, developers who adapt to these new tools. Let’s explore the AI-assisted development workflow...',
            ],
            [
                'title' => 'Securing Your Laravel Application',
                'summary' => 'Essential security practices to protect your Laravel app from SQL injection, XSS, and CSRF attacks.',
                'content' => 'Security is critical for any web application. Laravel provides robust built-in protections against common vulnerabilities. However, developers still need to enforce strong password policies, use secure headers, and validate all inputs. Here’s a checklist for securing your Laravel app before production deployment...',
            ],
            [
                'title' => 'GraphQL vs REST: Making the Right Choice',
                'summary' => 'Understanding the differences between GraphQL and REST APIs and when to use each approach.',
                'content' => 'REST has been the standard for API design, but GraphQL offers a more flexible approach where the client can request exactly the data it needs. While GraphQL solves over-fetching and under-fetching, it introduces complexity in caching and rate limiting. Here is a deep dive into both architectures...',
            ],
            [
                'title' => 'Deploying Next.js on Vercel',
                'summary' => 'A complete guide to deploying and configuring a Next.js application on the Vercel platform.',
                'content' => 'Next.js and Vercel are a match made in heaven. Vercel provides seamless deployments, edge caching, and serverless function support out of the box. This tutorial covers environment variables, custom domains, and edge middleware configuration for a production-ready Next.js app...',
            ],
            [
                'title' => 'Introduction to Microservices Architecture',
                'summary' => 'Breaking down monoliths into smaller, independent services for better scalability and maintainability.',
                'content' => 'As applications grow, a monolithic architecture can become hard to maintain. Microservices solve this by dividing the app into loosely coupled services communicating via APIs or message brokers like RabbitMQ. Let’s discuss the benefits, challenges, and patterns of microservices...',
            ],
            [
                'title' => 'Designing Beautiful UIs with Figma',
                'summary' => 'Tips and tricks for developers to create better UI/UX designs using Figma.',
                'content' => 'You don’t have to be a professional designer to create good-looking interfaces. Understanding basic design principles like typography, spacing, and color theory, combined with Figma’s powerful auto-layout features, can drastically improve your frontend projects...',
            ],
            [
                'title' => 'Mastering Git and Version Control',
                'summary' => 'Advanced Git commands and workflows to collaborate effectively with your team.',
                'content' => 'Beyond basic commits and pushes, mastering Git involves understanding interactive rebasing, cherry-picking, and managing merge conflicts. This guide covers the Git Flow branching strategy and how to use Git hooks to enforce code quality before pushing to the repository...',
            ]
        ];

        foreach ($blogs as $index => $blog) {
            $cat = $categories[array_rand($categories)];
            $image = 'https://source.unsplash.com/800x600/?technology,code,computer&sig=' . $index;
            
            DB::table('blogs')->insert([
                'title' => $blog['title'],
                'slug' => Str::slug($blog['title']),
                'category' => $cat,
                'image' => $image,
                'summary' => $blog['summary'],
                'content' => '<p>' . $blog['content'] . '</p><p>This is a generated blog post to showcase the portfolio capabilities. More detailed content would go here, complete with formatting, code snippets, and images.</p>',
                'author' => $author,
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(rand(1, 60)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
