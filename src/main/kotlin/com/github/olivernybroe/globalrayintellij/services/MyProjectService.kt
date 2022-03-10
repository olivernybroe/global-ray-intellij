package com.github.olivernybroe.globalrayintellij.services

import com.intellij.openapi.project.Project
import com.github.olivernybroe.globalrayintellij.MyBundle

class MyProjectService(project: Project) {

    init {
        println(MyBundle.message("projectService", project.name))
    }
}
