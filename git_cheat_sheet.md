
# GIT CHEAT SHEET

## STAGE & SNAPSHOT  
**Working with snapshots and the Git staging area**  
- `git status`  
  Show modified files in the working directory, staged for your next commit.
- `git add [file]`  
  Add a file as it looks now to your next commit (stage).
- `git reset [file]`  
  Unstage a file while retaining the changes in the working directory.
- `git diff`  
  Show the changes that are not staged yet.
- `git diff --staged`  
  Show the changes that are staged but not committed.
- `git commit -m “[descriptive message]”`  
  Commit your staged content as a new commit snapshot.

---

## SETUP  
**Configuring user information used across all local repositories**  
- `git config --global user.name “[firstname lastname]”`  
  Set a name that is identifiable for credit when reviewing version history.
- `git config --global user.email “[valid-email]”`  
  Set an email address that will be associated with each history marker.
- `git config --global color.ui auto`  
  Enable automatic command line coloring for easier reviewing.

---

## SETUP & INIT  
**Configuring user information, initializing and cloning repositories**  
- `git init`  
  Initialize an existing directory as a Git repository.
- `git clone [url]`  
  Retrieve an entire repository from a hosted location via URL.

---

## BRANCH & MERGE  
**Isolating work in branches, changing context, and integrating changes**  
- `git branch`  
  List your branches; a `*` will appear next to the currently active branch.
- `git branch [branch-name]`  
  Create a new branch at the current commit.
- `git checkout [branch-name]`  
  Switch to another branch and check it out into your working directory.
- `git merge [branch]`  
  Merge the specified branch’s history into the current one.
- `git log`  
  Show all commits in the current branch’s history.

---

## SHARE & UPDATE  
**Retrieving updates from another repository and updating local repos**  
- `git remote add [alias] [url]`  
  Add a Git URL as an alias.
- `git fetch [alias]`  
  Fetch all branches from that Git remote.
- `git merge [alias]/[branch]`  
  Merge a remote branch into your current branch to bring it up to date.
- `git push [alias] [branch]`  
  Transmit local branch commits to the remote repository branch.
- `git pull`  
  Fetch and merge any commits from the tracking remote branch.

---

## TRACKING PATH CHANGES  
**Versioning file removals and path changes**  
- `git rm [file]`  
  Delete a file from the project and stage the removal for commit.
- `git mv [existing-path] [new-path]`  
  Change an existing file path and stage the move.
- `git log --stat -M`  
  Show all commit logs with indication of any paths that moved.

---

## TEMPORARY COMMITS  
**Temporarily store modified, tracked files to change branches**  
- `git stash`  
  Save modified and staged changes.
- `git stash list`  
  List the stack order of stashed file changes.
- `git stash pop`  
  Apply the top of the stash stack to the working directory.
- `git stash drop`  
  Discard the changes from the top of the stash stack.

---

## REWRITE HISTORY  
**Rewriting branches, updating commits, and clearing history**  
- `git rebase [branch]`  
  Apply any commits of the current branch ahead of the specified one.
- `git reset --hard [commit]`  
  Clear the staging area and rewrite the working tree from the specified commit.

---

## INSPECT & COMPARE  
**Examining logs, diffs, and object information**  
- `git log`  
  Show the commit history for the currently active branch.
- `git log branchB..branchA`  
  Show the commits on branchA that are not on branchB.
- `git log --follow [file]`  
  Show the commits that changed the file, even across renames.
- `git diff branchB...branchA`  
  Show the differences between branchA and branchB.
- `git show [SHA]`  
  Show any object in Git in a human-readable format.

---

## IGNORING PATTERNS  
**Preventing unintentional staging or committing of files**  
- `git config --global core.excludesfile [file]`  
  Set system-wide ignore patterns for all local repositories.

**Example `.gitignore` file:**
```
logs/
*.notes
pattern*/
```
Save a file with desired patterns as `.gitignore` with either direct string matches or wildcard globs.

---

## GIT RESOURCES:
- **GitHub for Windows**: [https://windows.github.com](https://windows.github.com)  
- **GitHub for Mac**: [https://mac.github.com](https://mac.github.com)  
- **Git for All Platforms**: [http://git-scm.com](http://git-scm.com)

---

This cheat sheet provides a quick reference to the most common Git commands for managing version control in your projects.
